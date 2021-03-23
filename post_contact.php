<?php
$errors = [];
if(!array_key_exists('name', $_POST) || $_POST['name'] == '' ){
    $errors['name'] = "vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    $errors['name'] = "vous n'avez pas renseigné votre Email";
}
if(!array_key_exists('subjet', $_POST) || $_POST['subjet'] == '' ){
    $errors['name'] = "vous n'avez pas renseigné votre sujet";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == '' ){
    $errors['name'] = "vous n'avez pas renseigné votre méssage";
}
session_start();
if(!empty($errors)){
    
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location: index.php');
}else{
    $_SESSION['succes'] = 1;
$message = $_POST['message'];
$headers = 'FROM: site@local.dev';
mail('l.carvajol@codeur.online','formulaire de contact',$message,$headers);
header('location: index.php');
}