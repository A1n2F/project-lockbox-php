<?php 

    $id = $_REQUEST['id'];

    $db = new DB;
    $livro = $db->livro($id);

    require 'dados.php';

    view('livro', [
        'livro' => $livro
    ]);
?>