<?php 

    $livros = (new DB)->livros($_REQUEST['pesquisar']);

    view('index', [
        'livros' => $livros
    ]);
?>