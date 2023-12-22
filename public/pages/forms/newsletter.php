<?php

require "../../../boostrap.php";

if(!isset($_POST['email']) || empty($_POST['email'])) {
    flash('email', 'Campo de e-mail está vazio!');
    return redirectToHome();
}

$validate = validate([
    'email' => 'e',
]);

if(create('newsletter', $validate)) {
    flash('email', 'E-mail cadastrado!', 'success');
    return redirectToHome();
}

