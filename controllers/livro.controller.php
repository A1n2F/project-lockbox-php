<?php 

    $livro = (new DB)->livro($_REQUEST['id']);

    require 'dados.php';

    view('livro', [
        'livro' => $livro
    ]);
?>