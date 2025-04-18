<div class="p-2 border-stone-800 border-2 bg-stone-900 rounded my-6">
    <div class="flex">
        <div class="w-1/3">
            <!-- <image src="" alt="" class="w-60 h-90" /> -->
             imagem
        </div>
        <div class="space-y-6 ml-2">
            <a href="/livro?id=<?=$livro->id ?>" class="text-xl font-semibold hover:underline"><?=$livro->title ?></a>
            <p class="text-sm italic"><?=$livro->author ?></p>
            <div class="text-sm italic"><?=str_repeat('⭐', $livro->nota_avaliacao)?>(<?=$livro->count_avaliacoes?> Avaliações)</div>
            <div class="mt-2 max-w-7xl">
                <?=$livro->description ?>
            </div>
        </div>
    </div>
</div>
