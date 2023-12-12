<?php

require "../boostrap.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <div class="header">
        <div class="content">
            <div class="wrapper-header">
                <div class="logo">
                    <img src="" alt="">
                </div>
                <div class="login">
                    <a href="?page=login">Login</a>
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