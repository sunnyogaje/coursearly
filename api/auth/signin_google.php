<?php
session_start();
include('../../controller/config/config.php');

// Clean output buffer and set response type
ob_clean();
header('Content-Type: application/json');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// Validate required fields
if (!isset($_POST['email'], $_POST['social_id'], $_POST['type'])) {
    echo json_encode(['status' => 'error', 'message' => 'Missing required fields.']);
    exit;
}

$email = trim($_POST['email']);
$social_id = trim($_POST['social_id']);
$type = trim($_POST['type']);

// Only proceed with login type
if ($type !== 'login') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request type.']);
    exit;
}

// Double-check values are not empty
if (empty($email) || empty($social_id)) {
    echo json_encode(['status' => 'error', 'message' => 'Email and Social ID are required.']);
    exit;
}

// Prepare SQL SELECT statement to check user
$query = "SELECT * FROM users_tbl WHERE email = ? AND social_id = ?";
$stmt = mysqli_prepare($conn, $query);

// if (!$stmt) {
//     echo json_encode(['status' => 'error', 'message' => 'Database error (prepare failed): ' . mysqli_error($conn)]);
//     exit;
// }

// Bind and execute
mysqli_stmt_bind_param($stmt, "ss", $email, $social_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check if user exists
if ($user = mysqli_fetch_assoc($result)) {
    $_SESSION['user_id'] = $user['user_id']; 

    echo json_encode([
        'status' => 'success',
        'message' => 'Login successful',
        'user' => $user
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'User does not exist. Please sign up.'
    ]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
exit;
?>
