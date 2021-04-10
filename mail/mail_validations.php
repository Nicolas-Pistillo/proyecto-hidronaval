<?php
session_start();

$name = $_POST['fullname'];
$email = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['text-content'];

$errors = '';

if (isset($name)) {
    if (empty($name)) {
        $errors.= 'El campo nombre no puede estar vacío'.'<br>';
    }
} else {
    $errors.= 'Se debe especificar un campo con su nombre'.'<br>';
}

if (isset($email)) {
    if (empty($email)) {
        $errors.= 'El campo email no puede estar vacío'.'<br>';
    }
} else {
    $errors.= 'Se debe especificar un campo con su correo electronico'.'<br>';
}

if (isset($subject)) {
    if (empty($subject)) {
        $errors.= 'El campo asunto no puede estar vacío <br>';
    }
} else {
    $errors.= 'Se debe especificar un campo con el asunto de su consulta'.'<br>';
}

if (isset($message)) {
    if (empty($message)) {
        $errors.= 'El cuerpo del mensaje no puede estar vacío'.'<br>';
    }
} else {
    $errors.= 'Se debe especificar un mensaje para su consulta'.'<br>';
}

if (!empty($errors)) {
    echo $errors;
} else {
    require 'send_mail.php';

    $_SESSION['contact_sended'] = sendHidroMail($name,$email,$subject,$message);

    header('Location:http://localhost/proyectos/proyecto-hidronaval#contacto');
}