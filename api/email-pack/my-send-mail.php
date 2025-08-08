<?php

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Include the PHPMailer files using relative paths
    require '../PHPMailer-master/Exception.php';
    require '../PHPMailer-master/PHPMailer.php';
    require '../PHPMailer-master/SMTP.php';


    // Function to send an email
    function sendEmail($htmlContent, $subject, $recipientEmail, $senderEmail)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'mail.coursearly.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'verify@coursearly.com'; 
            $mail->Password   = 'Year@2025';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port       = 587; // ✅ Or 465

            $mail->setFrom('verify@coursearly.com', 'Coursearly');
            $mail->addAddress($recipientEmail);
            $mail->addBCC('verify@coursearly.com');

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $htmlContent;
            $mail->AltBody = strip_tags($htmlContent);

            $mail->send();

            // if ($mail->send()) {
            //     echo 'Message sent successfully.';
            // } else {
            //     echo 'Mailer Error: ' . $mail->ErrorInfo;
            // }
        } catch (Exception $e) {
            // echo 'Mailer Exception: ' . $mail->ErrorInfo;
        }

    }
?>
