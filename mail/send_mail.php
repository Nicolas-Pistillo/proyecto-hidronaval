<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '..\vendor\autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

function sendHidroMail($name,$email,$subject,$message) {
    try {
        //Server settings
        $mail = new PHPMailer;
        $mail->isSMTP();
        //$mail->SMTPDebug = 2; To debug
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = 'contacto.hidronaval@gmail.com';
        $mail->Password = 'hidroneumatica';
        $mail->setFrom('contacto.hidronaval@gmail.com', 'Hidronaval-Contacto');
        $mail->addAddress($email, $name);
        $mail->isHTML();

        $msg = '';
    
        if ($mail->addReplyTo($email, $name)) {
            $mail->Subject = "RE:" . $subject;
            $mail->Body = <<<EOT
            <br>¡Hola,$name!</br> Muchas gracias por contactarte con nosotros, tu consulta sera procesada y contestada en breve, recuerda que puedes solicitar material gratuito acerca de Oleohidraulica dentro de nuestra web. 

            Equipo de hidronaval
            
            Tu mensaje: $message
EOT;
            if (!$mail->send()) {
                $msg = 'Ha ocurrido un error al enviar el correo, por favor intente de nuevo mas tarde.';
            } else {
                $msg = 'Correo enviado con éxito, muchas gracias por su interes.';
            }
        } else {
            $msg = 'El correo no ha podido enviarse';
        }

        return $msg;

    } catch (Exception $e) {
        return  "Error al enviar el correo, info del error: {$mail->ErrorInfo}";
    }
}
