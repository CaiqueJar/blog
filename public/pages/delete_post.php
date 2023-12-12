<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deleted = delete('posts', 'id', $id);

if(!$deleted) {
    flash('message', 'Erro ao deletar');
}
return redirect('/posts');
