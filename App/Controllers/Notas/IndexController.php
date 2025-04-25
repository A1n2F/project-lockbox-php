<?php
    namespace App\Controllers\Notas;

use App\Models\Nota;

    class IndexController {
        public function __invoke() {

            $notas = Nota::all();

            // if(isset($_GET['id'])) {
            //     $id = $_GET['id'];
            // } else {
            //     $id = $notas[0]->id;
            // }

            $id = isset($_GET['id']) ? $_GET['id'] : $notas[0]->id;

            $filtro = array_filter($notas, fn($n) => $n->id == $id);
            $notaSelecionada = array_pop($filtro);

            return view('notas', [
                'notas' => $notas,
                'notaSelecionada' => $notaSelecionada
            ]);
        }
    }

?>