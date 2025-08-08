<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('../../controller/config/config.php'); // Adjust path as needed

$response = ['status' => 'error', 'message' => 'Something went wrong'];

if (!$conn) {
    $response['message'] = 'Database connection failed';
    echo json_encode($response);
    exit;
}

// Sanitize input
$email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
$otp = mysqli_real_escape_string($conn, $_POST['otp'] ?? '');
$type = mysqli_real_escape_string($conn, $_POST['type'] ?? '');



if (empty($email) || empty($otp)) {
    $response['message'] = 'Email or OTP missing';
    echo json_encode($response);
    exit;
}

// Fetch OTP from DB
$query = "SELECT email_otp, otp_generated_at, user_id, status FROM users_tbl WHERE 
email = '$email' LIMIT 1";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) === 0) {
    $response['message'] = 'Invalid email address';
    echo json_encode($response);
    exit;
}

$user = mysqli_fetch_assoc($result);


if($type == 'signup')
{
    // Check if already verified
    if ($user['status'] === '1') {
        $response['status'] = 'success';
        $response['message'] = 'Account already verified.';
        echo json_encode($response);
        exit;
    }

}


// Check OTP match
if ($user['email_otp'] !== $otp) {
    $response['message'] = 'Invalid OTP';
    echo json_encode($response);
    exit;
}

// Check expiration (5 mins = 300 seconds)
$otp_time = strtotime($user['otp_generated_at']);
$current_time = time();
if (($current_time - $otp_time) > 300) {
    $response['message'] = 'OTP expired. Please request a new one.';
    echo json_encode($response);
    exit;
}

// Update status to active
$update = "UPDATE users_tbl SET status = '1' WHERE email = '$email'";
if (mysqli_query($conn, $update)) {

    session_start();
    $_SESSION['user_id'] = $user['user_id']; //start session

    $response['status'] = 'success';
    $response['message'] = 'Email verified successfully!';
} else {
    $response['message'] = 'Failed to update user status.';
}

echo json_encode($response);
