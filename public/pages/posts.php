<?php

if(!isset($_SESSION['logged'])) {
    flash('error', 'Você precisa estar logado para acessar esta página!');
    return redirect('login');
}
$posts = all('posts');
?>

<a href="">Criar post</a>
<table>
    <thead>
        <th>Id</th>
        <th>Título</th>
        <th>Subtítulo</th>
        <th>Data</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->title ?></td>
                <td><?= $post->subtitle ?></td>
                <td><?= $post->date ?></td>
                <td>
                    <a href="?page=edit_post&id=<?php $post->id ?>">Editar</a>
                    <a>Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
