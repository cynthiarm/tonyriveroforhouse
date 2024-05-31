<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

}

include("PHPMailer/PHPMailer.php");
include("PHPMailer/SMTP.php");
include("PHPMailer/Exception.php");
//include("PHPMailer/class.phpmailer.php");

try {
   // $type = $_POST['type']; //1--> spanish, 2--> english
    $name = $_POST['name'];
    $emailTo = $_POST['email'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    //$subject = $_POST['subject'];
    $bodyEmail = $_POST['message'];
    
    /*$fromemail = "noreply@tonyriveroforhouse.com";
    $fromname = "Someone is trying to reach you by using your Tony Rivero For House website!";
    $host = "tonyriveroforhouse.com";
    $port = "567";
    $SMTPAuth = "false";
    $SMTPSecure = "tls";
    $Username = "noreply@tonyriveroforhouse.com";
    $Password = "Tonyrivero2024#";
    $emailTo = 'crenteria@deviseis.com';*/

    $mail->isSMTP();
    $mail->SMTPDebug = 1;
    $mail-> "smtp.gmail.com";
    $mail-> "587";
    $mail-> "true";
    $mail-> "tls";
    $mail-> "noreplytonyriveroforhouse@gmail.com";
    $mail-> "txwm xdfi gqhm vfbj";

    
    /*$mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );*/
  
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username = $fromemail;
    $mail->Password = $Password;

    $mail->setFrom($fromemail,$fromname);
    $mail->addAddress('crenteria@deviseis.com');
    

    //$mail->msgHTML(true);
    $mail->isHTML(true);
   // $mail->Subject = $subject;
    $mail->Body = $bodyEmail;
     //$mail->AltBody = strip_tags($bodyEmail);
    //$mail->CharSet = 'UTF-8';
    
    if(!$mail->send()){
            echo "We couldn't send your message! "; die();
        }

    echo "<div style='color: #000;margin-bottom: 15px;font-size: 15px;'>Your message has been sent.</div>";die();
           
    
    var_dump('1');die();


    /*$type = $_POST['type']; //1--> spanish, 2--> english
       $name = $_POST['name'];
       
       $email = $_POST['email'];
       $bodyEmail = $_POST['message'];
      //  $message = $_POST['message'];
       $issue = $_POST['issue'];
       $mail = $_POST['mail_to'];

        
       /* $mail->SMTPAuth = true;
        $mail->Port = 587; 
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com'; 
        $mail->Username = 'noreplytonyriveroforhouse@gmail.com'; // SMTP username
        $mail->Password = 'skcj jpbv desc jipf'; // SMTP password*/
      

    /*  $hello = '';
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
      $subject = 'Someone is trying to reach you by using your Tony Rivero For House website!';
      $fromname = "Someone is trying to reach you by using your Tony Rivero For House website!";

        if($type == '1' )
        {
            $hello = 'Hello';
            $emailLang = 'Email:';
            $nameLang = 'Name:';
            $messageLang = 'Message:';
            $subject = 'Someone is trying to reach you by using your Tony Rivero For House website!';
            $fromname = "Someone is trying to reach you by using your Tony Rivero For House website!";


        }
        else if($type == '2'){
            $hello = 'Hola';
            $emailLang = 'Correo Electrónico:';
            $nameLang = 'Nombre:';
            $messageLang = 'Mensaje:';
            $subject = 'Someone is trying to reach you by using your Tony Rivero For House website!!';
            $fromname = "Someone is trying to reach you by using your Tony Rivero For House website!";

        }*/

       /* $headers  = "From: Tony Rivero For House Info <noreplytonyriveroforhouse@gmail.com>" . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "Mime-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";


       
       /*  $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        )*/




       /*$image = base64_encode(file_get_contents("img/logo/Rivero_logo - header.png"));
        $logo = 'img/logo/Rivero_logo - header.png';
        $link = 'https://tonyriveroforhouse.com/';*/
        
        /*$bodyEmail .= '<html><body>';
        $bodyEmail .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
        $bodyEmail .= "<h1>$hello</h1>";
        $bodyEmail .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $bodyEmail .= "<tr style='background: #ed1c24;'><td align='right'><strong>$nameLang</strong> </td><td>" . $name . "</td></tr>";
        $bodyEmail .= "<tr><td align='right'><strong> $emailLang</strong> </td><td>" . $email . "</td></tr>";
        $bodyEmail .= "<tr style='background: #ed1c24;'><td align='right'><strong>$issueLang</strong> </td><td>". $issue . "</td></tr>";
        $bodyEmail .= "<tr><td align='right'><strong>$messageLang</strong> </td><td>" .  trim($_POST["message"]) . "</td></tr>";
        $bodyEmail .= "</table>";
        $bodyEmail .= "</body></html>";*/

        //$mail = new PHPMailer\PHPMailer\PHPMailer();

        /*$mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = $host;
        $mail->Port = $port;
        $mail->SMTPAuth = $SMTPAuth;
        $mail->SMTPSecure = $SMTPSecure;
        $mail->Username = $fromemail;
        $mail->Password = $Password;

        $mail->setFrom($fromemail,'Tony Rivero For House');
        $mail->addAddress($emailTo);
        $mail->Subject = $subject;

        $mail->msgHTML($bodyEmail);
        $mail->AltBody = strip_tags($bodyEmail);
        $mail->CharSet = 'UTF-8';
        $mail->send();


        $mail->isHTML(true);

        
   
         if(!$mail->send()){
            if($type == '2' ){
                error_log("Mailer Error: No se pudo enviar el correo! " . $mail->ErrorInfo); die();
            }
            else if($type == '1'){
                error_log("Mailer Error: We couldn't send your message! " . $mail->ErrorInfo); die();
            }    
        }
        if($type == '2' ){
            echo "<html>";
            echo "<div style='color: #000;margin-bottom: 15px;font-size: 15px;'>Mensaje enviado correctamente.</div>";die();
        }
        else if($type == '1'){
            echo "<html>";
            echo "<div style='color: #000;margin-bottom: 15px;font-size: 15px;'>Your message has been sent.</div>";die();
        }    */
        

    } catch (Exception $e) {

    }

?>