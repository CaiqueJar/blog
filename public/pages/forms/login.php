<?php

    require "../../../boostrap.php";

    $validate = validate([
        'login' => 's',
        'password' => 's'
    ]);

    $user = find('user', 'login', $validate->login);
    if($user) {
        if($user->password == $validate->password) {
            $_SESSION['logged'] = true;
            return redirect('posts');
        }
        flash('error', 'Login ou senha incorretos!');
        return redirect('login');
    }
    flash('error', 'Login ou senha incorretos!');
    return redirect('login');
?>