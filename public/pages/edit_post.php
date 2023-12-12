<?php
    $post = find('posts', 'id', $_GET['id']);
?>
<form action="/pages/forms/update_post.php" method="POST">
    <label for="title">Título: </label>
    <input type="text" value="<?= $post->title ?>" name="title" id="title">
    <input type="hidden" value="<?= $post->id ?>" name="id" id="id">

    <label for="subtitle">Subtítulo: </label>
    <input type="text" value="<?= $post->subtitle ?>" name="subtitle" id="subtitle">
    <br><br>
    <label for="title">Texto: </label>
    <br>
    <textarea name="text" id="text" cols="30" rows="10"><?= $post->text ?></textarea>
    <button type="submit">Enviar</button>
</form>