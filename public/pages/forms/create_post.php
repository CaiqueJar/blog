<?php

require "../../../boostrap.php";

$validate = validate([
    'title' => 's',
    'subtitle' => 's',
    'text' => 's'
]);

$upload_dir = 'assets/uploads/';

dd($_POST['image']);

$post = create('posts', $validate);

if($post) {
    flash('message', 'Sucesso ao cadastrar');
    return redirect('posts');
}
flash('message', 'Erro ao cadastrar');
return redirect('create_post');
