<?php
    class DB {
        public function livros() {
            $db = new PDO('sqlite:database.sqlite');

            $query = $db->query("SELECT * FROM livros");

            $items =  $query->fetchAll();

            $retorno = [];

            foreach($items as $item) {
                $livro = new Livro;
                $livro->id = $item['id'];
                $livro->title = $item['title'];
                $livro->author = $item['author'];
                $livro->description = $item['description'];
                $livro->img = $item['img'];

                $retorno []= $livro;
            }

            return $retorno;
        }
    }
?>