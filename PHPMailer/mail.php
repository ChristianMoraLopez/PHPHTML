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
        $phpmailer->Username = 'instertatucorreo';
        $phpmailer->Password = 'insertacontraseña'; // Reemplaza esto con tu contraseña real

        // Añadiendo destinatarios
        $phpmailer->setFrom('tucorreo@dominio.com', 'nombre del remitente');
        $phpmailer->addAddress($email, $name); 

        // Definiendo el contenido de mi email
        $phpmailer->isHTML($html);
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $body;

         // Establecer la codificación de caracteres a UTF-8
         $phpmailer->CharSet = 'UTF-8';

        // Mandar el correo
        $phpmailer->send();
        return true;
    } catch (Exception $e) {
        return "Error al enviar el correo: {$phpmailer->ErrorInfo}";
    }
}

?>
