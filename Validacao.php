<?php 
    class Validacao {
        public $validacoes;

        public static function validar($regras, $dados) {
            $validacao = new self;

            foreach($regras as $campo => $regrasDoCampo) {
                $validacao->$regrasDoCampo($campo);
            }

            return $validacao;
        }

        private function required($campo) {
            if(strlen($campo) == 0) {
                $this->validacoes [] = "O $campo é obrigatório.";
            }
        }
    }
?>