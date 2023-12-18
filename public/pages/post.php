<?php
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    $post = find('posts', 'id', $id);
?>
<link rel="stylesheet" href="assets/css/post.css">
<main>
    <div class="content">
        <div class="wrapper-main">
            <div class="post">
                <div class="image">
                    <img src="../assets/uploads/<?= $post->image ?>" alt="">
                </div>
                <div class="text">
                    <h1><?= $post->title ?></h1>
                    <p><?= $post->text ?></p>
                </div>
            </div>
            <div class="others">
                <h2>Outras postagens</h2>
                <ul>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            <span>teste</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            <span>teste</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            <span>teste</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>