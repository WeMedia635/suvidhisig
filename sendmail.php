<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $contact_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    // $address = $_POST['address'];
    // $message = $_POST['message'];
    $select = $_POST['inqure'];


    $to = 'suvidhimarketing205@gmail.com';
    $subject = 'New Form Submission';
    $boundary = md5(time());

    // email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // email body
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "Name: $name\r\nContact Number: $contact_number\r\nEmail: $email\r\nInquery For: $select\r\n\r\n";
}
   



    // send email
    if (mail($to, $subject, $body, $headers)) {
        // email sent successfully
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>function showMessage() { swal("Success!", "Thank you for showing your interest with us!", "success").then(function() {window.location.href = "inqury1.php";}); } window.onload = showMessage;</script>';
        exit();
    } else {
        // email not sent
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>function showMessage() { swal("Oops!", "Something went wrong. Please try again later.", "error"); } window.onload = showMessage;</script>';
        exit();
    }

	
?>