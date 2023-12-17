<?php

if(!isset($_SESSION['logged'])) {
    flash('error', 'Você precisa estar logado para acessar esta página!');
    return redirect('login');
}
$posts = all('posts');
?>
<?= get('success') ?>
<link rel="stylesheet" href="assets/css/posts.css">
<main>
    <div class="content">
        <div class="wrapper">
            <a class="create-post" href="?page=create_post">Criar post</a>
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
                            <td><?= $post->created_at ?></td>
                            <td>
                                <a href="?page=edit_post&id=<?= $post->id ?>">Editar</a>
                                <a href="?page=delete_post&id=<?= $post->id ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
