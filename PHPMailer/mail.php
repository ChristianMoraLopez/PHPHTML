<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuración inicial de nuestro servidor de correos
    $phpmailer = new PHPMailer(true); // true habilita las excepciones
    try {
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp-mail.outlook.com'; // Cambia esto por el host de Hotmail
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 587; // Puerto típico para Hotmail
        $phpmailer->Username = 'christianmoralopez@hotmail.com';
        $phpmailer->Password = '4682Oscuridad!'; // Reemplaza esto con tu contraseña real

        // Añadiendo destinatarios
        $phpmailer->setFrom('christianmoralopez@hotmail.com', 'Christian Mora Lopez');
        $phpmailer->addAddress($email, $name); 

        // Definiendo el contenido de mi email
        $phpmailer->isHTML($html);
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $body;

        // Mandar el correo
        $phpmailer->send();
        return true;
    } catch (Exception $e) {
        return "Error al enviar el correo: {$phpmailer->ErrorInfo}";
    }
}

?>
