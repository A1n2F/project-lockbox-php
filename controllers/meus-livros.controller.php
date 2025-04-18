<?php
  
  if(!auth()) {
    header('location: /');
    exit();
  }

  $livros = $database->query(
    "SELECT * FROM livros WHERE usuario_id = :id",
    Livro::class,
    ['id' => auth()->id]
  );
  
  view('meus-livros', compact('livros'));
?>