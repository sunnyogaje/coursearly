<?php
header('Content-Type: application/json');
include('../../controller/config/config.php');

try {
    $sql = "SELECT 
                r.comment,
                r.date,
                u.full_name AS user_name,
                c.course_title,
                c.course_image
            FROM review r
            LEFT JOIN users_tbl u ON r.user_id = u.user_id
            LEFT JOIN courses c ON r.course_id = c.course_id
            ORDER BY r.date DESC
            LIMIT 10";

    $result = $conn->query($sql);
    $reviews = [];

    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }

    echo json_encode([
        'success' => true,
        'data' => $reviews
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Error loading reviews.',
        'details' => $e->getMessage()
    ]);
}
?>
