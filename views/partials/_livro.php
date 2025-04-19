<div class="p-2 border-stone-800 border-2 bg-stone-900 rounded mt-6">
    <div class="flex">
        <div class="w-1/3">
            <img src="<?=$livro->imagem ?>" alt="" class="w-60 rounded" />
        </div>
        <div class="space-y-6 ml-2">
            <a href="/livro?id=<?=$livro->id ?>" class="text-xl font-semibold hover:underline"><?=$livro->title ?></a>
            <p class="text-sm italic"><?=$livro->author ?></p>
            <div class="text-sm italic"><?=str_repeat('⭐', $livro->nota_avaliacao)?>(<?=$livro->count_avaliacoes?> Avaliações)</div>
            <div class="mt-2 max-w-7xl">
                <?=$livro->description ?>
            </div>

            <div class="mt-2">
                Ano de Lançamento: 
                <?=$livro->ano_de_lancamento ?>
            </div>
        </div>
    </div>
</div>
