<?php
$pdo = connect();

$query = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 1";
$latest = $pdo->prepare($query);
$latest->execute();
$latest = $latest->fetch();

$query = "SELECT * FROM posts WHERE id != '{$latest->id}' ORDER BY created_at DESC";
$posts = $pdo->prepare($query);
$posts->execute();
$posts = $posts->fetchAll();
?>
<link rel="stylesheet" href="assets/css/home.css">
<main>
    <div class="content">
        <div class="wrapper-main">
            <h1>Bem vindo ao meu blog.</h1>
            <p>Por aqui você podera acompanhar publicações minhas!</p>
        </div>
    </div>    
</main>
<section class="latest">
    <div class="content">
        <div class="wrapper-latest">
            <div class="wrapper-img">
                <img src="../assets/uploads/<?= $latest->image ?>" alt="">
            </div>
            <div class="wrapper-text">
                <h2><?= $latest->title ?></h2>
                <p><?= $latest->subtitle ?></p>
                <a href="?page=post&id=<?= $latest->id ?>">Ver mais</a>
            </div>
        </div>
    </div>
</section>
<hr class="separator">
<section class="posts">
    <div class="content">
        <div class="wrapper-cards">
            <h2>Seção de posts: </h2>
            <div class="cards">
                <?php foreach($posts as $post): ?>
                    <div class="card">
                        <div class="wrapper-img">
                            <img src="../assets/uploads/<?= $post->image ?>" alt="">
                        </div>
                        <div class="wrapper-text">
                            <h3><?= $post->title ?></h3>
                            <p><?= $post->subtitle ?></p>
                            <a class="more" href="?page=post&id=<?= $post->id ?>">Ver mais</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>