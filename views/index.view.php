<h1 class="mt-6 font-bold text-lg">Explorar</h1>

<form class="w-full flex gap-2 mt-6">
    <input 
        type="text" 
        name="pesquisar"
        class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
        placeholder="Pesquisar"
    />
    <button type="submit" class="px-4 py-2 bg-stone-900 hover:bg-stone-800 rounded transition-colors cursor-pointer">
        Pesquisar
    </button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">

<!-- <?php foreach($livros as $livro) {
    require 'partials/_livro.php';
} ?> -->

<?php foreach($livros as $livro): ?>
 
 <div class="p-2 border-stone-800 border-2 bg-stone-900 rounded">
     <div class="flex">
         <div class="w-1/3">
             <image src="<?=$livro->imagem ?>" alt="" class="w-40 h-50 rounded" />
         </div>
         <div class="space-y-6 ml-2">
            <a href="/livro?id=<?=$livro->id ?>" class="text-xl font-semibold hover:underline"><?=$livro->title ?></a>
             <p class="text-sm italic"><?=$livro->author ?></p>
             <div class="text-sm italic"><?=str_repeat('⭐', $livro->nota_avaliacao)?>(<?=$livro->count_avaliacoes?> Avaliações)</div>
         </div>
     </div>
 
     <div class="mt-2">
         <?=$livro->description ?>
     </div>

     <div class="mt-2">
        Ano de Lançamento: 
        <?=$livro->ano_de_lancamento ?>
    </div>
 </div>
 
 <?php endforeach; ?>

</section>