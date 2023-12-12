<?php

    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
?>