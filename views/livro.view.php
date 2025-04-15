<?=$livro['title']?>

<div class="p-2 border-stone-800 border-2 bg-stone-900 rounded">
    <div class="flex">
        <div class="w-1/3">imagem</div>
        <div class="space-y-1">
            <a href="/livro.php?id=<?=$livro['id']?>" class="font-semibold hover:underline"><?=$livro['title']?></a>
            <p class="text-sm italic"><?=$livro['author']?></p>
            <div class="text-sm italic">(3 avaliações)</div>
        </div>
    </div>

    <div class="text-sm mt-2">
        <?=$livro['description']?>
    </div>
</div>