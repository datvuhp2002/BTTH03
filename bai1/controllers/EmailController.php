<?php
include "services/EmailService.php";
    class EmailController {
        public function index(){
            
            if(isset($_POST['emailAddress']) && isset($_POST['subject']) && isset($_POST['message'])){
                $emailServer = new MyEmailServer();
                $emailSender = new EmailSender($emailServer);
                $emailSender->send($_POST['emailAddress'], $_POST['subject'], $_POST['message']);
            }
            include 'views/email/index.php';
        }
    }
?>