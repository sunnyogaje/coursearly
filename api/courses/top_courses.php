<?php

header('Content-Type: application/json');
include('../../controller/config/config.php');
include('../../controller/config/functions.php');

try {
    $request_data = $_POST['courses'] ?? 'top_all'; 
     $countryCode = $_POST['userCountry'] ?? 'NG'; 

    $limit = '';

    if ($request_data === 'topcourses') {
        $limit = 'LIMIT 6';
    } elseif($request_data === 'top_two')
    {
         $limit = 'LIMIT 2';
    }


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

// echo $userCurrencySymbol;

    // echo $userCurrencyRate;

    // SQL: Top courses by rating
    $sql = "
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
    WHERE c.course_status = '1'
    ORDER BY c.course_rating DESC
    $limit
   ";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        throw new Exception("Query failed: " . mysqli_error($conn));
    }

    $courses = [];
    $courseIds = [];
    while ($row = mysqli_fetch_assoc($result)) {

        $courseIds[] = $row['course_id'];
        $convertedPrice = round($row['course_price'] * $userCurrencyRate, 2);

        $courses[] = [
            'course_id' => (int) $row['course_id'],
            'title' => $row['course_title'],
            'subtitle' => $row['course_subtitle'],
            'description' => $row['course_description'],
            'course_image' => $row['course_image'],
            'price' => $convertedPrice,
            'tags' => explode(',', $row['course_tags']),
            'currency_symbol' => $userCurrencySymbol ?? '$', // default symbol
            'video_url' => $row['promotional_video'],
            'rating' => (float) $row['course_rating'],
            'total_students' => (int) $row['course_tot_students'],
            'clicks' => (int) $row['course_clicks'],
            'purchases' => (int) $row['course_purchases'],
            'category_id' => (int) $row['category_id'],
            'category' => $row['category'],
            'subcategory_id' => (int) $row['subcategory_id'],
            'subcategory' => $row['subcategory'],
            'instructor' => $row['instructor_name'] ?? 'Unknown',
            'status' => $row['course_status'],
            'date' => $row['date']
            
        ];
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
        'data' => $courses
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'A server error occurred while fetching course data.',
        'details' => $e->getMessage()
    ]);
}
