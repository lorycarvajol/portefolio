<?php
$errors = [];
if(!array_key_exists('name', $_POST) || $_POST['name'] == '' ){
    $errors['name'] = '<p class="couleur_texte">vous n\'avez pas renseigné votre nom</p>';
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    $errors['email'] = '<p class="couleur_texte">vous n\'avez pas renseigné votre Email.</p>';
}
if(!array_key_exists('subjet', $_POST) || $_POST['subjet'] == '' ){
    $errors['subjet'] = '<p class="couleur_texte">vous n\'avez pas renseigné votre sujet.</p>';
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == '' ){
    $errors['message'] = '<p class="couleur_texte">vous n\'avez pas remplis le champ message.</p>' ;
}

session_start();
if(!empty($errors)){
    
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location: index.php#ancre');
}else{
    $_SESSION['succes'] = 1;
$message = $_POST['message'];
$headers = 'FROM: site@local.dev';
mail('lorycarvajolwebdev@gmail.com','formulaire de contact',$message,$headers);
header('location: index.php#ancre');

}

