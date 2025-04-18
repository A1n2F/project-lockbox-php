<?php 
    class Livro {
        public $id;
        public $title;
        public $author;
        public $description;
        public $usuario_id;
        public $ano_de_lancamento;
        public $nota_avaliacao;
        public $count_avaliacoes;

        public function query($where, $params) {
            $database = new Database(config('database')); 

            return $database->query(
                "SELECT
                    l.id,
                    l.title,
                    l.author,
                    l.description,
                    l.ano_de_lancamento,
                    ifnull(round(sum(a.nota) / 5), 0) as nota_avaliacao,
                    ifnull(count(a.id), 0) as count_avaliacoes
                    FROM
                    livros l
                    LEFT JOIN avaliacoes a ON a.livro_id = l.id
                    WHERE 
                    $where
                    GROUP BY
                    l.id,
                    l.title,
                    l.author,
                    l.description,
                    l.ano_de_lancamento",
                self::class, 
                $params);
        }

        public static function get($id) {        
            return (new self)->query('l.id = :id', ['id' => $id])->fetch();
        }

        public static function all($filtro = '') {
            return (new self)->query('title like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
        }

        public static function meus($usuario_id) {
            return (new self)->query('l.usuario_id = :usuario_id', ['usuario_id' => $usuario_id])->fetchAll();
        }
    }
?>