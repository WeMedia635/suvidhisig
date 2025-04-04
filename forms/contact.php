<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load PHPMailer classes
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = 'suvidhimarketing205@gmail.com';
    $from_name = htmlspecialchars($_POST['name']);
    $from_email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $user_message = htmlspecialchars($_POST['message']);

    // Validate inputs
    if (!filter_var($from_email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    if (empty($from_name) || empty($subject) || empty($user_message)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // e.g., smtp.gmail.com
        $mail->SMTPAuth = true;
        $mail->Username = 'team@andwemedia.com'; // SMTP username
        $mail->Password = 'okjyhdxfianlowrp'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body    = "You have received a new message from your website contact form.\n\n"
                       . "Here are the details:\n"
                       . "Name: $from_name\n"
                       . "Email: $from_email\n"
                       . "Subject: $subject\n"
                       . "Message:\n$user_message\n";

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent.']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
