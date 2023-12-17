<?php

require "../../../boostrap.php";

$validate = validate([
    'title' => 's',
    'subtitle' => 's',
    'text' => 's'
]);

$target_file = basename($_FILES["image"]["name"]);
$target_temp = $_FILES["image"]["tmp_name"];
$target_dir = '../../assets/uploads/'.$target_file;
$upload = move_uploaded_file($target_temp, $target_dir);

if($upload) {
    $validate->image = $target_file;
    $validate->image = $target_file;
    $post = create('posts', $validate);
    
    if($post) {
        flash('message', 'Sucesso ao cadastrar');
        return redirect('posts');
    }
}

flash('error', 'Erro ao cadastrar');
return redirect('create_post');
