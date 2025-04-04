<style>
    /*#success-message {*/
    /*  background-color: #4CAF50;*/
    /*  color: white;*/
    /*  padding: 20px;*/
    /*  text-align: center;*/
    /*  font-size: 18px;*/
    /*  border-radius: 5px;*/
    /*  margin-top: 20px;*/
    /*  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);*/
    /*}*/

    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #408866;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #553678;
    }

    .container p {
        font-size: 16px;
        margin: 10px 0;
    }

    .container .phone-number {
        font-size: 20px;
        font-weight: bold;
        margin: 20px 0;
    }

    .container .back-button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #EBC881;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }

    .container .back-button:hover {
        background-color: #333;
        color: #f4f4f4;
    }
</style>

<?php

// Enable error reporting and display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer autoload files
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';
require 'PHPMailer/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $clientName = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile_number'];
    $for = $_POST['inqure'];


    // Compose email message
    $to = 'team@andwemedia.com'; // Change this to your email address
    $subject = 'New Customer inquiry from website';
    $message = "Customer Name: $clientName\n";
    $message .= "Email Address: $email\n";
    $message .= "Mobile Number: $phone\n";
    $message .= "Enquire For: $for\n";

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'team@andwemedia.com'; // SMTP username
        $mail->Password = 'eibc nbra leuw cgdj'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $clientName);
        $mail->addAddress($to); // Add a recipient

        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Send the email
        $mail->send();
        echo '<body>
        <div class="container">
        <img src="../assets/img/Elite/el.svg" alt="logo" style="width: 250px;">
        <h1>Thank You</h1>
        <p id="success-message">Thank you for your inquiry. We will contact you shortly.</p>
        <a href="../elite99.php" class="back-button">Back To Home</a>
    </div>
</body>';
        echo '<script>
               

                // JavaScript function to download the PDF file
                function downloadBrochure() {
                    var link = document.createElement("a");
                    link.href = "../assets/img/Elite/KRK-Elite-99-Brochure.pdf";
                    link.download = "Elite-99-brochure.pdf";
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                }
                downloadBrochure();
              </script>';
    } catch (Exception $e) {
        echo "Sorry, there was an error sending your message. Please try again later. Error: {$mail->ErrorInfo}";
    }
} else {
    // Redirect if accessed directly
    header("Location: index.php");
    exit;
}
?>