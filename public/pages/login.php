<link rel="stylesheet" href="assets/css/login.css">
<?= get('error') ?>
<main>
    <div class="content">
        <div class="wrapper-login">
            <form action="/pages/forms/login.php" method="POST">
                <div class="input">
                    <label for="login">Login: </label>
                    <input type="text" name="login" id="login" placeholder="Digite seu login">
                </div>
                <div class="input">
                    <label for="password">Senha: </label>
                    <input type="password" name="password" id="password" placeholder="Digite sua Senha">
                </div>
                <button type="submit">Logar</button>

            </form>
        </div>
    </div>
</main>
