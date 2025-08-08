<?php
header('Content-Type: application/json');
include('../../controller/config/config.php');

try {
    // 1. Total active students
    $students = mysqli_fetch_assoc(mysqli_query($conn, "
        SELECT COUNT(*) AS total_students 
        FROM users_tbl 
        WHERE user_type = 'student' AND status = 1
    "))['total_students'];

    // 2. Total approved courses
    $courses = mysqli_fetch_assoc(mysqli_query($conn, "
        SELECT COUNT(*) AS total_courses 
        FROM courses 
        WHERE course_status = 1
    "))['total_courses'];

    // 3. Total active instructors with approved courses
    $instructors = mysqli_fetch_assoc(mysqli_query($conn, "
        SELECT COUNT(DISTINCT u.user_id) AS total_instructors
        FROM users_tbl u
        JOIN courses c ON c.user_id = u.user_id
        WHERE u.user_type = 'instructor' AND u.status = 1 AND c.course_status = 1
    "))['total_instructors'];

    // 4. Average course rating
    $avg_rating = mysqli_fetch_assoc(mysqli_query($conn, "
        SELECT ROUND(AVG(course_rating), 2) AS avg_rating 
        FROM courses 
        WHERE course_status = 1 AND course_rating IS NOT NULL
    "))['avg_rating'];

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
