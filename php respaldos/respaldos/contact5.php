<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


// Include the PHPMailer Autoload file
require 'PHPMailer/PHPMailerAutoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// Set mailer to use SMTP


// SMTP configuration
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'mail.tonyriveroforhouse.com'; // Your SMTP server
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'noreply@tonyriveroforhouse.com'; // SMTP username
$mail->Password = 'Tonyrivero2024#'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, 'ssl' also accepted
$mail->Port = 465; // SMTP port (typically 587 for TLS or 465 for SSL)

// Sender and recipient details
$mail->setFrom('noreply@tonyriveroforhouse.com', 'Tony Rivero For House');
$mail->addAddress('crenteria@deviseis.com', 'Tony Rivero For House');

// Email subject and body
$mail->Subject = 'Test Email';
$mail->Body = 'This is a test email sent using PHPMailer';

// Send email
if(!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent successfully!';
}
?>

