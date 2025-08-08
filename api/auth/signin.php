<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
include('../../controller/config/config.php');
include('../email-pack/my-send-mail.php');



if (!$conn) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit;
}

// $full_name = mysqli_real_escape_string($conn, $_POST['full_name'] ?? '');
// $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');


$full_name = mysqli_real_escape_string($conn, 'prosper' ?? '');
$email = mysqli_real_escape_string($conn, 'prosperortese@gmail.com' ?? '');


if (empty($full_name) || empty($email)) {
    echo json_encode(['status' => 'error', 'message' => 'Missing full name or email']);
    exit;
}

// Check if user already exists
$check = mysqli_query($conn, "SELECT * FROM users_tbl WHERE email = '$email'");
if (mysqli_num_rows($check) > 0) {

    // echo json_encode(['status' => 'exists', 'message' => 'Email already registered']);
    // exit;

        $date = date('Y-m-d H:i:s'); // current datetime
        $verification_code= rand(100000, 999999);
        $otp_expiry = time() + 300; // 5 minutes from now

        $senderEmail = 'verify@gmail.com';
        $subject = 'Login Verification';
        $verifcode_type = 'Login Verification Code';
        $verifcode_title = 'OTP for login confirmation';

        // Update OTP and timestamp
        $update = mysqli_query($conn, "
            UPDATE users_tbl 
            SET email_otp = '$verification_code', otp_generated_at = '$date' 
            WHERE email = '$email'
        ");

       

        



        include('../email-pack/verification-email.php');
        sendEmail($htmlContent, $subject, $email, $senderEmail);

        $data = [
            'ver_code' => $verification_code,
            'status' => 1
         ];

    echo json_encode([
        'status' => 'success',
        'message' => 'Signup successful! OTP sent to your email for verification.',
        'email' => $email,
        'expires_at' => $otp_expiry
    ]);
    exit;

}else{
      echo json_encode(['status' => 'exists', 'message' => 'Invalid credentials provided, user does not exist']);
    exit;
}

  



 


 
?>
