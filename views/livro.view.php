<?php require 'partials/_livro.php'; ?>


<h2 class="mt-4 text-lg font-bold">Avaliações</h2>

<div class="grid grid-cols-4 gap-4 py-6">
    <div class="col-span-3 gap-4 flex flex-col gap-4">
        
    <?php foreach($avaliacoes as $avaliacao): ?>
        <div class="border border-stone-700 rounded p-2">
            <?=$avaliacao->avaliacao?>

            <?php
                $nota = str_repeat('⭐', $avaliacao->nota);
            ?>

            <?=$nota?>

        </div>
    <?php endforeach; ?>

    </div>
    <div>
    
    <?php if(auth()): ?>

    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Me conte o que achou!</h1>

        <form class="p-4 space-y-4" method="post" action="/avaliacao-criar">
            <div class="flex flex-col">
                <input type="hidden" name="livro_id" value="<?=$livro->id ?>" />
                <label class="text-stone-400 mb-2">Avaliação</label>
                <textarea type="text" name="avaliacao" class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"></textarea>
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Nota</label>
                <select name="nota" class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md cursor-pointer
            hover:bg-stone-800 transition-colors hover:text-lime-500">
                Salvar
            </button>

            <?php if($validacoes = flash()->get('validacoes')): ?>
                <div class="border-red-800 bg-red-900 text-red-400 px-4 py-2 rounded-md font-bold">

                    <ul>
                        <?php foreach($validacoes as $validacao): ?>
                            <li><?=$validacao?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                </div>

            <?php endif; ?>
        </form>
    </div>

    <?php endif; ?>

    </div>
</div>