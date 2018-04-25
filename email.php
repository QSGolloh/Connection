<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMessage($email, $fname, $password ) {
//Load Composer's autoloader
    

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com"; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'connectashesi@gmail.com';                 // SMTP username
        $mail->Password = 'CONNECTASHESI123';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('connectashesi@gmail.com', 'Connect');
      
        $mail->addAddress($email, $fname);   
       
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Ashesi Connect Email Verification';
        $mail->Body    = '
                        Thanks for signing up!
            Your account has been created, you can login with the following credentials after 
            you have activated your account by pressing the url below.<br>
             
             <b>
            ------------------------
            Username: '.$fname.'
            Password: '.$password.' 
            ------------------------
             </b><br>
            Please click this link to activate your account:
            <a href="http://localhost/Connect/verify.php?email=$email">link</a>
                ';
      

        $mail->send();

        echo 'Verification message has been sent to your ashesi email';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
}

?>