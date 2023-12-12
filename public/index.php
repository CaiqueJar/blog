<?php

require "../boostrap.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="header">
        <div class="content">
            <div class="wrapper-header">
                <div class="logo">
                    <!-- <img src="" alt=""> -->
                    <a href="/">
                        <i class="fa-solid fa-eye"></i>
                        Blog
                    </a>
                </div>
                <div class="login">
                    <a href="?page=login"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        try {
            require load();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        ?>
    </div>
</body>
</html>