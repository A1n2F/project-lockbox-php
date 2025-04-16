<?php 

    $pesquisar = $_REQUEST['pesquisar'] ?? '';
    
    $livros = (new DB)->query(
        query: "SELECT * FROM livros WHERE title LIKE :filtro", 
        class: Livro::class, 
        params: ['filtro' => "%$pesquisar%"])
        ->fetchAll();

    view('index', [
        'livros' => $livros
    ]);
?>