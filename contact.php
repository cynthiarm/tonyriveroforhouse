<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


// Include the PHPMailer Autoload file
//require 'PHPMailer/PHPMailerAutoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {

// Set mailer to use SMTP
    $name = $_POST['name'];
    $emailTo = $_POST['email'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    //$subject = $_POST['subject'];
    $bodyEmail = $_POST['message'];

    $hello = '';
    $emailLang = '';
    $nameLang = '';
    $issueLang = '';
    $messageLang = '';
    $subjectLang = '';
    $subject = '';
    $headers = '';

    $hello = 'Hello';
    $emailLang = 'Email:';
    $nameLang = 'Name:';
    $issueLang = 'Subject:';
    $subjectLang = '';
    $messageLang = 'Message:';


    $image = base64_encode(file_get_contents("img/logo/Rivero_logo - header.png"));
    $logo = 'img/logo/Rivero_logo - header.png';
    $link = 'https://tonyriveroforhouse.com/';



// SMTP configuration
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'tonyriveroforhouse.com'; // Your SMTP server
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'noreply@tonyriveroforhouse.com'; // SMTP username
    $mail->Password = 'Tonyrivero2024#'; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, 'ssl' also accepted
    $mail->Port = 465; // SMTP port (typically 587 for TLS or 465 for SSL)

    // Sender and recipient details
    $mail->setFrom('noreply@tonyriveroforhouse.com', 'Someone is trying to reach you by using your Tony Rivero For House website!');
    $mail->addAddress('tonyrivero@ymail.com');

    // Email subject and body
    $mail->isHTML(true);
    $mail->Subject = 'Someone is trying to reach you by using your Tony Rivero For House website!';
    $mail->Body = '<html><body>';
    $mail->Body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    $mail->Body .= "<h1>$hello</h1>";
    $mail->Body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $mail->Body .= "<tr style='background: #ed1c24;'><td align='right'><strong>$nameLang</strong> </td><td>" . $name . "</td></tr>";
    $mail->Body .= "<tr><td align='right'><strong> $emailLang</strong> </td><td>" . $email . "</td></tr>";
    $mail->Body .= "<tr style='background: #ed1c24;'><td align='right'><strong>$issueLang</strong> </td><td>". $issue . "</td></tr>";
    $mail->Body .= "<tr><td align='right'><strong>$messageLang</strong> </td><td>" .  trim($_POST["message"]) . "</td></tr>";
    $mail->Body .= "</table>";
    $mail->Body .= "</body></html>";

    // Send email
    $mail->send();
    echo 'Email has been sent';
    /*if(!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent successfully!';
    }*/

}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

