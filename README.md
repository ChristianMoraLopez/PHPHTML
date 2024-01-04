# Formulario de Contacto con PHPMailer
Este es un formulario de contacto simple implementado en PHP que utiliza PHPMailer para enviar correos electrónicos. El formulario incluye validación básica en el lado del servidor y notificaciones de éxito o error después de enviar el mensaje.

## Configuración de PHPMailer
Asegúrate de configurar correctamente PHPMailer con la información de tu servidor SMTP y credenciales de correo electrónico en el archivo mail.php.
```
php
Copy code
<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false) {
    // Configuración inicial de nuestro servidor de correos
    $phpmailer = new PHPMailer(true); // true habilita las excepciones
    try {
        // Configuración SMTP
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp-mail.outlook.com'; // Cambia esto por el host de Hotmail
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 587; // Puerto típico para Hotmail
        $phpmailer->Username = 'tu-correo@hotmail.com';
        $phpmailer->Password = 'tu-contrasena'; // Reemplaza esto con tu contraseña real

        // Añadiendo destinatarios
        $phpmailer->setFrom('tu-correo@hotmail.com', 'Tu Nombre');
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

```
## Uso del Formulario
El formulario HTML está incluido en el archivo principal. Al enviar el formulario, se procesa en la misma página, y se muestra una alerta de éxito o error según el resultado del envío.

El formulario incluye campos para el 
- Nombre
- Correo electrónico
- Asunto
- Mensaje.

```
html

<form action="./" method="POST">
    <!-- Campos del formulario aquí -->
</form>
Mensajes de Alerta
Las alertas de éxito o error se muestran después de procesar el formulario.

html
Copy code
<?php if($status == "danger"): ?>
    <div class="alert danger">
        <span>Surgió un problema</span>
    </div>
<?php endif; ?>

<?php if($status == "success"): ?>
    <div class="alert success">
        <span>¡Mensaje enviado con éxito!</span>
    </div>
<?php endif; ?>
Información de Contacto
Se proporciona información de contacto en la parte inferior del formulario.

html
Copy code
<div class="contact-info">
    <div class="info">
        <span><i class="fas fa-map-marker-alt"></i> Cra 27A # 53 A - 05.</span>
    </div>
    <div class="info">
        <span><i class="fas fa-phone"></i> +57 314 4715980</span>
    </div>
</div>
```
**Recuerda personalizar la información de contacto con los detalles correctos.**

¡Listo! Ahora tienes un formulario de contacto simple integrado con PHPMailer para enviar correos electrónicos de manera segura y confiable.

