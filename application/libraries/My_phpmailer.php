<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_phpmailer {

    public function __construct()
    {
        require (APPPATH.'third_party/phpmailer/PHPMailerAutoload.php');
    }

    public function send_email($email, $subject, $content)
    {
        $mail = new PHPMailer();

        $mail->isSMTP(); //Set PHPMailer to use SMTP.
        // $mail->SMTPDebug    = 2; //Enable SMTP debugging.
        $mail->SMTPAuth     = true; //Set this to true if SMTP host requires authentication to send email
        // $mail->Host         = "srv9.niagahoster.com"; //Set SMTP host name
        $mail->Host         = "smtp.gmail.com"; //Set SMTP host name
        $mail->SMTPSecure   = "ssl"; // ssl atau tls //If SMTP requires TLS encryption then set it
        $mail->Port         = 465; // 465 atau 587 //Set TCP port to connect to

        // $mail->SMTPOptions = array(
        //     'ssl' => array(
        //         'verify_peer' => false,
        //         'verify_peer_name' => false,
        //         'allow_self_signed' => true
        //     )
        // );

        //Provide username and password
        $mail->Username     = ""; // email pengirim
        $mail->Password     = ""; // password email pengirim
        $mail->From         = ""; // email pengirim. Samakan dengan $mail->Username
        $mail->FromName     = ""; // Namanya

        $mail->IsHTML(true);
        $mail->Subject      = $subject; // judul email
        $mail->Body         = $content; // isi email
        if (is_array($email)) {
            $resp = '<b>'.implode('</b>, <b>', $email).'</b>';
            foreach ($email as $recipents) {
                $mail->AddAddress($recipents);
            }
        } else {
            $mail->AddAddress($email);
            $resp = '<b>'.$email.'</b>';
        }

        if (!$mail->send()) {
            return array('success' => false, 'emails' => $resp, 'err_info' => $mail->ErrorInfo);
        } else {
            return array('success' => true, 'emails' => $resp);
        }
    }
}
