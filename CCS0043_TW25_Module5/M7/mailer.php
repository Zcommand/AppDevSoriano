<?php

require("mailer/PHPMailer.php");
require("mailer/SMTP.php");
require("mailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_confirmation($to_email, $to_name, $token) {
    // Create a mailer object
    $mailer = new PHPMailer(true);

    // Set important setting of the mailer object
    $mailer->isSMTP(); // Sets the mailer to use SMTP
    $mailer->Host = "smtp.gmail.com";
    $mailer->SMTPAuth = true;
    $mailer->Username = "your_actual_email";
    $mailer->Password = "your_actual_password";
    $mailer->SMTPSecure = "tls";
    $mailer->Port = "587";
    $mailer->isHTML(true);

    // Set the details of the email
    $confirm_link = "http://localhost/3t2526/tw25/module7/confirm.php?token=" . $token;
    $mailer->setFrom("NO_REPLY@gmail.com", "School Registrar");
    $mailer->addAddress($to_email, $to_name);
    $mailer->Subject = "Confirm Registration";
    $mailer->Body = "
        <p>Dear <strong><?= $to_name ?></strong>,</p>
        <p>Thank you for registering. Please click the clink below to confirm your registration.</p>
        <p>
            <a href='$confirm_link' style='padding: 10px 20px; margin-top: 10px; margin-bottom: 10px; background: #198752; color: white; text-decoration: none; border-radius: 5px'>Confirm Registration</a>
        </p>
        <p>If the button does not work, you can copy the link below and paste it into your web browser:</p>
        <p><a href='$confirm_link'><?= $confirm_link ?></a></p>
        <p>Sincerely,</p>
        <p>School Registrar</p>
    ";

    $mailer->send();
}

?>

