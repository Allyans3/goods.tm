<?php

include_once ROOT . '/PHPMailer/src/Exception.php';
include_once ROOT . '/PHPMailer/src/PHPMailer.php';
include_once ROOT . '/PHPMailer/src/SMTP.php';

class MailSet {
    public static function config() {
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        //Server settings
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'graphauth@gmail.com';                  // SMTP username
        $mail->Password   = 'ppwnccfozhahrjmj';                     // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to
        $mail->isHTML(true);
        return $mail;
    }
}