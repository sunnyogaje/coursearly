<?php
header('Content-Type: application/json');
include('../../controller/config/config.php');

try {
        $page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
        $search = isset($_POST['search']) ? trim($_POST['search']) : '';
        $category_id = isset($_POST['category']) ? (int)$_POST['category'] : 0;
        $countryCode = $_POST['userCountry'] ?? 'NG'; 





        
        $countryCode = mysqli_real_escape_string($conn, $countryCode);

        $currencySql = "
        SELECT 
            co.id AS country_id,
            co.name AS country_name,
            co.iso,
            co.iso3,
        
            co.currency_name,
            cu.currency_id,
            cu.code,
            cu.currecy,
            cu.symbol,
            r.rate
            
        FROM countries co
        LEFT JOIN currency cu 
            ON co.currency = cu.code
        LEFT JOIN rates r 
            ON cu.currency_id = r.currency_id
        WHERE co.iso = '$countryCode'
    ";




    $currencyResult = mysqli_query($conn, $currencySql);

    if ($currencyResult && mysqli_num_rows($currencyResult) > 0) {
        $currencyData = mysqli_fetch_assoc($currencyResult);
        $userCurrencySymbol = $currencyData['symbol'] ?? '$';
        $userCurrencyRate   = $currencyData['rate'] ?? 1; // default 1 if not found
    } else {
        // Fallback if no match found
        $userCurrencySymbol = '$';
        $userCurrencyRate   = 1;
    }

    $limit = 6;
    $offset = ($page - 1) * $limit;

    $where = " WHERE c.course_status = 1";
    $params = [];
    $types = "";

    if (!empty($search)) {
        $where .= " AND (c.course_title LIKE ? OR c.course_description LIKE ?)";
        $search_param = "%{$search}%";
        $params[] = $search_param;
        $params[] = $search_param;
        $types .= "ss";
    }

    if ($category_id > 0) {
        $where .= " AND c.category_id = ?";
        $params[] = $category_id;
        $types .= "i";
    }

    // Total count
    $sql_count = "SELECT COUNT(*) AS total_courses FROM courses c $where";
    $stmt_count = $conn->prepare($sql_count);
    if ($params) $stmt_count->bind_param($types, ...$params);
    $stmt_count->execute();
    $result_count = $stmt_count->get_result()->fetch_assoc();
    $total_courses = (int)$result_count['total_courses'];

    // Fetch paginated courses
    $sql_data = "
        SELECT 
            c.course_id,
            c.course_title,
            c.course_subtitle,
            c.course_description,
            c.course_image,
            c.course_price,
            c.course_tags,
            c.promotional_video,
            c.course_rating,
            c.course_tot_students,
            c.category_id,
            cat.category,
            c.subcategory_id,
            sub.subcategory,
            c.course_status,
            c.course_clicks,
            c.course_purchases,
            c.date,
            curr.symbol AS currency_symbol,
            u.full_name AS instructor_name
        FROM courses c
        LEFT JOIN category cat ON c.category_id = cat.id
        LEFT JOIN subcategory sub ON c.subcategory_id = sub.id
        LEFT JOIN currency curr ON c.currency_id = curr.currency_id
        LEFT JOIN users_tbl u ON c.user_id = u.user_id
        $where
        ORDER BY c.course_rating DESC
        LIMIT ? OFFSET ?
    ";
    $stmt = $conn->prepare($sql_data);
    $params[] = $limit;
    $params[] = $offset;
    $types .= "ii";
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result();

    $courses = [];
    $courseIds = [];

    while ($row = $result->fetch_assoc()) {
        $row['course_tags'] = explode(',', $row['course_tags']);
        $row['course_image'] = empty($row['course_image']) ? '../assets/images/default-course.webp' : $row['course_image'];
        $row['module_count'] = 0; // Placeholder to be filled later

         $convertedPrice = round($row['course_price'] * $userCurrencyRate, 2);
         $row['course_price'] = $convertedPrice;
        $row['currency_symbol'] = $userCurrencySymbol;

        $courses[] = $row;
        $courseIds[] = $row['course_id'];
    }

    // Count modules for the retrieved course IDs
    if (!empty($courseIds)) {
        $placeholders = implode(',', array_fill(0, count($courseIds), '?'));
        $typeStr = str_repeat('i', count($courseIds));

        $stmt_mod = $conn->prepare("SELECT course_id, COUNT(*) as module_count FROM modules WHERE course_id IN ($placeholders) GROUP BY course_id");
        $stmt_mod->bind_param($typeStr, ...$courseIds);
        $stmt_mod->execute();
        $mod_result = $stmt_mod->get_result();

        $moduleCounts = [];
        while ($mod = $mod_result->fetch_assoc()) {
            $moduleCounts[$mod['course_id']] = (int)$mod['module_count'];
        }

        // Inject module counts into course data
        foreach ($courses as &$course) {
            $cid = $course['course_id'];
            $course['module_count'] = $moduleCounts[$cid] ?? 0;
        }
    }

    echo json_encode([
        'success' => true,
        'data' => $courses,
        'total_courses' => $total_courses,
        'current_page' => $page,
        'total_pages' => ceil($total_courses / $limit)
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Server error occurred.',
        'details' => $e->getMessage()
    ]);
}
?>
