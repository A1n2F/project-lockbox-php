<div class="p-2 border-stone-800 border-2 bg-stone-900 rounded mt-6">
    <div class="flex">
        <div class="w-1/3">
            <image src="img/<?=$livro->img ?>" alt="" class="w-60 h-90" />
        </div>
        <div class="space-y-6">
            <a href="/livro.php?id=<?=$livro->id ?>" class="text-xl font-semibold hover:underline"><?=$livro->title ?></a>
            <p class="text-sm italic"><?=$livro->author ?></p>
            <div class="text-sm italic">(3 avaliações)</div>

            <div class="mt-2 max-w-7xl">
                <?=$livro->description ?>
            </div>
        </div>
    </div>
    
</div>