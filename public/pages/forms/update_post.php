<?php

    require "../../../boostrap.php";

    $validate = validate([
        'id' => 'i',
        'title' => 's',
        'subtitle' => 's',
        'text' => 's',
    ]);

    $post = find('posts', 'id', $validate->id);

    $post = update('posts', $validate, ['id', $post->id]);

?>