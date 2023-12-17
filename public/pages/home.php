<?php

$posts = all('posts');
?>
<link rel="stylesheet" href="assets/css/home.css">
<main>
    <div class="content">
        <div class="wrapper-main">
            <h1>Welcome to my blog.</h1>
            <p>Here you can read whatever I write</p>
        </div>
    </div>    
</main>
<section class="posts">
    <div class="content">
        <div class="wrapper-cards">
            <div class="cards">
                <?php foreach($posts as $post): ?>
                    <div class="card">
                        <div class="wrapper-img">
                            <img src="../assets/uploads/<?= $post->image ?>" alt="">
                        </div>
                        <div class="wrapper-text">
                            <h2><?= $post->title ?></h2>
                            <p><?= $post->subtitle ?></p>
                            <a class="more" href="">Ver mais</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>