<?php 

    $livro = Livro::get($_GET['id']);

        require 'dados.php';

    $avaliacoes = $database->query(
        "SELECT * FROM avaliacoes WHERE livro_id = :id",
        Avaliacao::class,
        ['id' => $_GET['id']])-> fetchAll();
        

    view('livro', compact('livro', 'avaliacoes'));
?>