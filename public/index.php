<?php

require "../boostrap.php";
$logged = isset($_SESSION['logged']) ? $_SESSION['logged'] : false;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="content">
            <div class="wrapper-header">
                <div class="logo">
                    <!-- <img src="" alt=""> -->
                    <a href="/">
                        <i class="fa-solid fa-eye"></i>
                        Blog
                    </a>
                </div>
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="Pesquisa...">
                    <div class="result">
                        <ul id="result"></ul>
                    </div>
                </div>
                <div class="login">
                    <?php if(!$logged): ?>
                        <a href="?page=login"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                    <?php else: ?>
                        <a href="?page=posts" style="margin-right: 20px"><i class="fa-solid fa-lock"></i> Adm</a>
                        <a href="?page=logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <?php
        try {
            require load();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        ?>
    </div>
    <footer style="background: #262626;">
        <div class="content">
            <div class="wrapper-footer">
                <div class="icons">
                    <a href="https://github.com/CaiqueJar" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.instagram.com/eu.dias__/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/caique-dias-de-melo-1b28221a6/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <p>Feito com muito <span style="color: #d94343;">❤</span> por Dias </p>
                <div class="copy">
                    <i>Dias &#169; 2023</i>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let alerts = document.querySelectorAll('.alert');
            alerts.forEach(element => {
                setTimeout(() => {
                    element.style.opacity = '0';
                }, 2000);
            });
        });

        $(document).ready(function() {
            $('#search').on('keyup', function() {
                let search = $('#search').val();
                $.ajax({
                    type: "GET",
                    url: "pages/teste.php",
                    data: {search: search},
                    success: function(res) {
                        if(res) {
                            result = JSON.parse(res);
    
                            $('#result').empty();
                            result.forEach(function(element) {
                                let tag = '<li><a href="?page=post&id='+ element['id'] +'">'+ element['title'] +'</a></li>';
                                $('#result').append(tag);
                            });
                        }
                    },
                    error: function(error) {
    
                    }
                });
            });
        });
    </script>
</body>
</html>