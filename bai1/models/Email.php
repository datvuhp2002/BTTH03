<?php
    include 'EmailServerInterface.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    class MyEmailServer implements EmailServerInterface {
        public function sendEmail($to, $subject, $message) {
            $mail = new PHPMailer(true);
            try {
         
                $mail->SMTPDebug = false;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'datvuhp2002@gmail.com';                     //SMTP username
                $mail->Password   = 'eghpfhhzxhgokcqa';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                $mail->charset = 'UTF-8'; 
                //Recipients
                $mail->setFrom('datvuhp2002@gmail.com', 'Mailer');
                $mail->addAddress("$to");     //Add a recipient
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "$subject";
                $mail->Body    = "$message";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }   
    }

?>