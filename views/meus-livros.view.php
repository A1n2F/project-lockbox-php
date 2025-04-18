<h1>Meus Livros</h1>

<div class="grid grid-cols-4 gap-4 py-6">
    <div class="col-span-3 gap-4 grid">
    </div>

    <div>
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo Livro!</h1>

        <form class="p-4 space-y-4" method="post" action="/livro-criar">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Título</label>
                <input type="text" name="title" class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1" />
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Autor</label>
                <input type="text" name="author" class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1" />
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Descrição</label>
                <textarea type="text" name="description" class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"></textarea>
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Ano de lançamento</label>
                <select name="ano_de_lancamento" class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1">
                    <?php foreach(range(1800, date('Y')) as $ano): ?>
                        <option value="<?=$ano?>"><?=$ano?></option>
                    <?php endforeach; ?>

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
    </div>
</div>