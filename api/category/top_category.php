<?php

       
        header('Content-Type: application/json');
        include('../../controller/config/config.php');
        include('../../controller/config/functions.php');

try {
   
        $request_data = $_POST['category_type'] ?? 'all';//check if all category


  
            $limit = ''; // default: no limit

            if ($request_data === 'top_three') {
                $limit = 'LIMIT 3';
            } elseif ($request_data === 'top_ten') {
                $limit = 'LIMIT 10';
            } elseif ($request_data === 'top_all') {
                $limit = ''; // no limit
            }
         

            // Query to fetch top 3 categories with highest average rating
           $sql = "
                SELECT
                cat.id AS category_id,
                cat.category,
                cat.category_image,
                
                COUNT(c.course_id) AS total_courses,
                AVG(r.rating_1_to_5) AS avg_rating
                FROM category cat
                LEFT JOIN courses c ON c.category_id = cat.id
                LEFT JOIN rating r ON c.course_id = r.course_id
                GROUP BY cat.id, cat.category
                ORDER BY AVG(r.rating_1_to_5) IS NULL, AVG(r.rating_1_to_5) DESC
                $limit
            ";
         

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            throw new Exception("Query failed: " . mysqli_error($conn));
        }

           $categories = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $categories[] = [
                    'category_id' => (int) $row['category_id'],
                    'category' => $row['category'],
                    'category_image' => $row['category_image'],
                    'total_courses' => (int) $row['total_courses'],
                    'avg_rating' => round((float) $row['avg_rating'], 2)
                ];
            }

        echo json_encode([
            'success' => true,
            'data' =>  $categories
        ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'A server error occurred while fetching category data.',
        'details' => $e->getMessage() // Add this line to expose the actual error
    ]);
}
