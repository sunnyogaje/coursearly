<?php
header('Content-Type: application/json');
include('../../controller/config/config.php');

try {
   

    // 1. site info
    $courses = mysqli_query($conn, "
        SELECT COUNT(*) AS total_courses 
        FROM courses 
        WHERE course_status = 1
    ");
    
    // mysqli_fetch_assoc()['total_courses']

    
    echo json_encode([
        'success' => true,
        'data' => [
            'total_students' => (int) $students,
            'total_courses' => (int) $courses,
            'total_instructors' => (int) $instructors,
            'average_rating' => (float) $avg_rating
        ]
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Error fetching summary.',
        'details' => $e->getMessage()
    ]);
}
