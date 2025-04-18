<?php 

require 'Validacao.php';

    if($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location: /meus-livros');
        exit();
    }

    if(!auth()) {
        abort(403);
    }

    $usuario_id = auth()->id;
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $ano_de_lancamento = $_POST['ano_de_lancamento'];

    $validacao = Validacao::validar([
        'title' => ['required', 'min:3'],
        'author' => ['required'],
        'description' => ['required'],
        'ano_de_lancamento' => ['required'],
    ], $_POST);

    if($validacao->naoPassou()) {
        header('location: /meus-livros');
        
        exit();
    }

    $novoNome = md5(rand());
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $imagem = "images/$novoNome.$extensao";
    move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);

    $database->query(
        "INSERT INTO livros (title, author, description, ano_de_lancamento, usuario_id, imagem)
        VALUES (:title, :author, :description, :ano_de_lancamento, :usuario_id, :imagem)",
        params: compact('title', 'author', 'description', 'ano_de_lancamento', 'usuario_id', 'imagem')
    );

    flash()->push('mensagem', 'Livro cadastrado com sucesso!');
    header('location: /meus-livros');
    exit();
?>