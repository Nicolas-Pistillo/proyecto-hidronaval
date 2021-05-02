<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function sendHidroMail($name,$email,$subject,$message) {
    try {
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        //$mail->SMTPDebug = 2; To debug
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = 'contacto.hidronaval@gmail.com';
        $mail->Password = 'hidroneumatica';
        /*$mail->setFrom('contacto.hidronaval@gmail.com', 'Hidronaval-Contacto');
        $mail->addAddress($email, $name);*/
        $mail->CharSet = 'utf-8';
        $mail->isHTML();

        $msg = '';
    
        $mail->From = $email;
        $mail->FromName = $name;
        $mail->addAddress($mail->Username,'Hidronaval-Contacto');
        $mail->Subject = $subject;
        $mail->Body = $message . " <p>Correo del usuario: $email</p>";
        $mail->AltBody = $message . " Correo del usuario: $email";

        if (!$mail->send()) {
            $msg = "<div class='alert alert-danger mb-3' role='alert'>
                        Lo sentimos, ha ocurrido un error en el proceso de envio de su correo
                    </div>";
            } else {
                $msg = "<div class='alert alert-success mb-3' role='alert'>
                            ¡Se ha enviado su mensaje exitosamente!
                        </div>";
            }

        return $msg;

    } catch (Exception $e) {
        return  "Error al enviar el correo, info del error: {$mail->ErrorInfo}";
    }
}