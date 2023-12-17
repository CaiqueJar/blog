<?= get('error'); ?>
<link rel="stylesheet" href="../assets/css/create_edit.css">
<main>
    <div class="content">
        <div class="wrapper">
            <form action="/pages/forms/create_post.php" method="POST" enctype="multipart/form-data">
                <div class="input">
                    <label for="title">Título: </label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="input">
                    <label for="subtitle">Subtítulo: </label>
                    <input type="text" name="subtitle" id="subtitle">
                </div>
                <div class="input">
                    <label for="title">Texto: </label>
                    <textarea name="text" id="text" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <label for="image">Imagem: </label>
                    <input type="file" name="image" id="image">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</main>
