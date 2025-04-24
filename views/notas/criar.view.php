<?php $validacoes = flash()->get('validacoes'); ?>

<div class="bg-base-300 rounded-l-box w-56">
    <div class="bg-base-200 p-4">
        + Nova Nota
    </div>
</div>

<div class="bg-base-200 rounded-r-box w-full p-10">
    <form action="/notas/criar" method="post" class="flex flex-col space-y-6">
        <label class="form-control w-full">
            <div>
                <span class="label-text">Título</span>
            </div>
            <input type="text" name="titulo" class="input input-bordered w-full" />

            <?php if(isset($validacoes['titulo'])) : ?>
                <div class="label text-sm text-error"><?=$validacoes['titulo'][0]?></div>
            <?php endif; ?>

        </label>

        <label class="form-control">
            <div>
                <span class="label-text">Sua nota</span>
            </div>
            <textarea name="nota" class="textarea textarea-bordered h-24 w-full"></textarea>

            <?php if(isset($validacoes['nota'])) : ?>
                <div class="label text-sm text-error"><?=$validacoes['nota'][0]?></div>
            <?php endif; ?>
        </label>

        <div class="flex items-center justify-end">
            <button class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>