<h1 class="mt-6 font-bold text-lg">Explorar</h1>

<form class="w-full flex gap-2 mt-6">
    <input 
        type="text" 
        class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
        placeholder="Pesquisar"
    />
    <button type="submit">Pesquisar</button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">

<?php foreach($livros as $livro): ?>

<div class="p-2 border-stone-800 border-2 bg-stone-900 rounded">
    <div class="flex">
        <div class="w-1/3">
            <image src=<?=$livro['img']?> alt="" class="w-40 h-50" />
        </div>
        <div class="space-y-1 ml-2">
            <a href="/livro?id=<?=$livro['id']?>" class="font-semibold hover:underline"><?=$livro['title']?></a>
            <p class="text-sm italic"><?=$livro['author']?></p>
            <div class="text-sm italic">(3 avaliações)</div>
        </div>
    </div>

    <div class="text-sm mt-2">
        <?=$livro['description']?>
    </div>
</div>

<?php endforeach; ?>

</section>