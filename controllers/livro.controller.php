<?php 

    $livro = $database->query(
        "SELECT
            l.id,
            l.title,
            l.author,
            l.description,
            l.ano_de_lancamento,
            round(sum(a.nota) / 5) as nota_avaliacao,
            count(a.id) as count_avaliacoes
            FROM
            livros l
            LEFT JOIN avaliacoes a ON a.livro_id = l.id
            WHERE
            l.id = :id
            GROUP BY
            l.id,
            l.title,
            l.author,
            l.description,
            l.ano_de_lancamento",
        Livro::class, 
        ['id' => $_REQUEST['id']])->fetch();

        require 'dados.php';

    $avaliacoes = $database->query(
        "SELECT * FROM avaliacoes WHERE livro_id = :id",
        Avaliacao::class,
        ['id' => $_GET['id']])-> fetchAll();
        

    view('livro', compact('livro', 'avaliacoes'));
?>