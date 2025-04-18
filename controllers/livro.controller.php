<?php 

    $livro = $database->query(
        "SELECT * FROM livros WHERE id = :id", 
        Livro::class, 
        ['id' => $_REQUEST['id']])->fetch();

        require 'dados.php';

    $avaliacoes = $database->query(
        "SELECT * FROM avaliacoes WHERE livro_id = :id",
        Avaliacao::class,
        ['id' => $_GET['id']])-> fetchAll();
        

    view('livro', compact('livro', 'avaliacoes'));
?>