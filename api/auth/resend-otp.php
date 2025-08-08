<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('../../controller/config/config.php');
include('../email-pack/my-send-mail.php'); // Your mailer function

$response = ['status' => 'error', 'message' => 'Something went wrong'];

$email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
$type = mysqli_real_escape_string($conn, $_POST['type'] ?? '');


if (empty($email)) {
    $response['message'] = 'Missing email';
    echo json_encode($response);
    exit;
}

$check = mysqli_query($conn, "SELECT * FROM users_tbl WHERE email = '$email'");
if (!$check || mysqli_num_rows($check) === 0) {
    $response['message'] = 'Email not found';
    echo json_encode($response);
    exit;
}

$user = mysqli_fetch_assoc($check);
$name = $user['full_name'] ?? 'User';
$verification_code = rand(100000, 999999);
$date = date('Y-m-d H:i:s');
$expiryTimestamp = time() + 300; // 5 minutes from now

// Update OTP and timestamp
$update = mysqli_query($conn, "
    UPDATE users_tbl 
    SET email_otp = '$verification_code', otp_generated_at = '$date' 
    WHERE email = '$email'
");

if (!$update) {
    $response['message'] = 'Failed to update OTP';
    echo json_encode($response);
    exit;
}

// Prepare and send the email
$subject = "New Verification Code - Coursearly";
$senderEmail = 'verify@coursearly.com';

 $verifcode_type = '';
 $verifcode_title = '';

 if($type == 'login')
 {
    $verifcode_type = 'Login Verification Code';
    $verifcode_title = 'OTP for login confirmation';

 }else{

    $verifcode_type = 'Email Verification Code';
    $verifcode_title = 'OTP for email confirmation';

 }



include('../email-pack/verification-email.php');
sendEmail($htmlContent, $subject, $email, $senderEmail);

// Return success response with expiry timestamp
$response['status'] = 'success';
$response['message'] = 'OTP resent successfully';
$response['email'] = $email;
$response['expires_at'] = $expiryTimestamp;

echo json_encode($response);
?>
