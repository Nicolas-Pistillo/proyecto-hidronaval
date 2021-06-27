<?php
session_start();

// BEGIN VALIDATIONS

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

// END VALIDATIONS

if (!empty($errors)) {

    $_SESSION['contact_return'] = "<div class='alert alert-danger mb-3' role='alert'>
                                        $errors
                                    </div>";

    header('Location:https://'. $_SERVER['SERVER_NAME'] . '/proyecto-hidronaval/#contacto');

} else {
    require 'send_mail.php';

    $_SESSION['contact_return'] = sendHidroMail($name,$email,$subject,$message);

    header('Location:https://'. $_SERVER['SERVER_NAME'] . '/proyecto-hidronaval/#contacto');
}
