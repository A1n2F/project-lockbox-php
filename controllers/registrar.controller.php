<?php
    
    require 'Validacao.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $validacao = Validacao::validar([
            'nome' => ['nome'],
            'email' => ['email', 'confirmed'],
            'senha' => ['senha', 'min:8', 'max:30', 'strong']
        ], $_POST);

        if($validacao->naoPassou('registrar')) {
            header('location: /login');
            
            exit();
        }

        $database->query(
            query: "INSERT INTO usuarios ( nome, email, senha ) VALUES ( :nome, :email, :senha )",
            params: [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => $_POST['senha']
            ]
        );

        flash()->push('mensagem', 'Registrado com sucesso!');

        header('location: /login');
        exit();
    
    }
?>