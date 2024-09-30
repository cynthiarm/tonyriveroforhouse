<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

}

include("PHPMailer/PHPMailer.php");
include("PHPMailer/SMTP.php");
include("PHPMailer/Exception.php");

try {

    $type = $_POST['type']; //2--> spanish, 1--> english
    $name = $_POST['name'];
    $emailTo = $_POST['email'];
    $email = $_POST['email'];
    $bodyEmail = $_POST['message'];

    $hello = '';
    $nameLang = '';
    $emailLang = '';
    $messageLang = '';
    $headers = '';


    if($type == '1' )
    {
        $hello = 'Hello';
        $nameLang = 'Name:';
        $emailLang = 'Email:';
        $messageLang = 'Message:';
        $subject = 'Someone interested in learning more about the campaign, do not miss this opportunity!';
        $fromname = "Someone interested in learning more about the campaign, do not miss this opportunity!";
    }
    else if($type == '2'){
        $hello = 'Hola';
        $nameLang = 'Nombre:';
        $emailLang = 'Correo Electrónico:';
        $messageLang = 'Mensaje:';
        $subject = '¡Alguien está interesado en saber más acerca de la campaña no pierdas esta oportunidad!';
        $fromname = '¡Alguien está interesado en saber más acerca de la campaña no pierdas esta oportunidad!';

    }
    //$image = base64_encode(file_get_contents("http://localhost/img/cyd2.png"));


    $headers  = "From: Tony Rivero For House Info <noreplytonyriveroforhouse@gmail.com>" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Mime-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";

    $fromemail = "noreplytonyriveroforhouse@gmail.com";

    $host = "smtp.gmail.com";
    $port = "587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $Username = "noreplytonyriveroforhouse@gmail.com";
    $Password = "txwm xdfi gqhm vfbj";
    $emailTo = 'crenteria@deviseis.com'; 

    $image = base64_encode(file_get_contents("img/logo/Rivero_logo - header.png"));
    $logo = 'img/logo/Rivero_logo - header.png';
    $link = 'https://tonyriveroforhouse.com/';

    $bodyEmail .= '<html><body>';
    $bodyEmail .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    $bodyEmail .= "<h1>$hello</h1>";
    $bodyEmail .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $bodyEmail .= "<tr style='background: #ed1c24;'><td align='right'><strong>$nameLang</strong> </td><td>" . $name . "</td></tr>";
    $bodyEmail .= "<tr><td align='right'><strong> $emailLang</strong> </td><td>" . $email . "</td></tr>";
    $bodyEmail .= "<tr style='background: #ed1c24;'><td align='right'><strong>$messageLang</strong> </td><td>" .  trim($_POST["message"]) . "</td></tr>";
    $bodyEmail .= "</table>";
    $bodyEmail .= "</body></html>";

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username = $fromemail;
    $mail->Password = $Password;        

    $mail->setFrom($fromemail,'Tony Rivero For House Info');
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
            echo "<div style='color: #ffffff;margin-left: 15px;margin-bottom: 15px;font-size: 15px;'>Mensaje enviado correctamente.</div>";die();
    }
    else if($type == '1'){
        echo "<html>";
        echo "<div style='color: #ffffff;margin-left: 15px;margin-bottom: 15px;font-size: 15px;'>Your message has been sent.</div>";die();
    }


    } catch (Exception $e) {

    }
?>
