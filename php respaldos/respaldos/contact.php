<?php

require 'PHPMailer/class.phpmailer.php';
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) 
{


    $name = $_POST['name'];
    $emailTo = $_POST['email'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    //$subject = $_POST['subject'];
    $bodyEmail = $_POST['message'];
    
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Port = 587; 
    $mail->SMTPSecure = 'tls';
    $mail->Host = "localhost"; 
    $mail->Username = "noreplytonyriveroforhouse@gmail.com"; // SMTP username
    $mail->Password = "skcj jpbv desc jipf"; // SMTP password



    $mail->IsSendmail();
    $mail->From  = "noreplytonyriveroforhouse@gmail.com";
    $mail->Fromname = "Tony Rivero For House";
    $mail->addAddress("crenteria@deviseis.com");

    var_dump('1');die();

    $mail->Subject = "Test Email";
    $mail->WordWrap = 80;

    $body = $name."thank you for your message. We will get back to you as soon as possible. Here is a copy of your message: ";
    
    $mail->MsgHTML($body);
    $mail->isHTML(true);
    $mail->Send();
    

    echo "Message has been sent";
    }else{
    echo "Message could not be sent";
    }


    


?>

