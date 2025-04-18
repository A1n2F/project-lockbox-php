<h1 class="mt-6 font-bold text-lg">Explorar</h1>

<form class="w-full flex gap-2 mt-6">
    <input 
        type="text" 
        name="pesquisar"
        class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
        placeholder="Pesquisar"
    />
    <button type="submit">Pesquisar</button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">

<?php foreach($livros as $livro) {
    require 'partials/_livro.php';
} ?>

</section>