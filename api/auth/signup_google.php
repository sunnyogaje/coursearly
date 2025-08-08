<?php
header('Content-Type: application/json');

include('../../controller/config/config.php');

if (!$conn) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit;
}

// 2. Get and decode JSON input
$data = json_decode(file_get_contents("php://input"), true);

if (!$data || !isset($data['email'], $data['name'], $data['token'], $data['social_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Missing required fields']);
    exit;
}

$name = mysqli_real_escape_string($conn, trim($data['name']));
$email = mysqli_real_escape_string($conn, trim($data['email']));
$token = mysqli_real_escape_string($conn, trim($data['token'])); // not used for now
$social_id = mysqli_real_escape_string($conn, trim($data['social_id'])); 

// 3. Check if user already exists
$check_query = "SELECT user_id FROM users_tbl WHERE email = '$email'";
$result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(['status' => 'exists', 'message' => 'User already registered']);
    exit;
}

// 4. Default values for Google signup
$user_type = 'student';
$password = '';
$wallet_balance = 0.00;
$status = 1;
$date = date('Y-m-d H:i:s');

// 5. Insert into database
$insert_query = "
    INSERT INTO users_tbl (
        full_name, user_type, email, password, wallet_balance,
        mode_of_verification, uploaded_document, verification_video,
        withdrawal_bank, withdrawal_acc_no, withdrawal_acc_name, status, date, social_id, login_method
    ) VALUES (
        '$name', '$user_type', '$email', '', '$wallet_balance',
        '', '', '',
        '', '', '', '$status', '$date','$social_id','google'
    )
";

if (mysqli_query($conn, $insert_query)) {
    session_start();
    $last_id = mysqli_insert_id($conn);
    $_SESSION['user_id'] = $last_id;
    echo json_encode([
        'status' => 'success',
        'message' => 'Signup successful',
        'user_id' => $last_id
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Signup failed']);
}

// 6. Close connection
mysqli_close($conn);
