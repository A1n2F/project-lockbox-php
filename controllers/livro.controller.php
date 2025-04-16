<?php 

    $livro = $database->query(
        "SELECT * FROM livros WHERE id = :id", 
        Livro::class, 
        ['id' => $_GET['id']])->fetch();

    require 'dados.php';

    view('livro', [
        'livro' => $livro
    ]);
?>