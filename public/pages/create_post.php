<main>
    <div class="content">
        <div class="wrapper">
            <form action="/pages/forms/create_post.php" method="POST">
                <label for="title">Título: </label>
                <input type="text" name="title" id="title">
                <label for="subtitle">Subtítulo: </label>
                <input type="text" name="subtitle" id="subtitle">
                <br><br>
                <label for="title">Texto: </label>
                <br>
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
                <br>
                <label for="image">Imagem: </label>
                <input type="file" name="image" id="image">
                <br>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</main>
