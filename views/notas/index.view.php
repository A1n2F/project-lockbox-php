<?php $validacoes = flash()->get('validacoes'); ?>

<div class="bg-base-300 rounded-l-box w-56 flex flex-col">
    <?php foreach($notas as $key => $nota): ?>
        <a href="/notas?id=<?=$nota->id?><?=request()->get('pesquisar', '', '&pesquisar=')?>"
            class="w-full p-2 cursor-pointer hover:bg-base-200 border-b-1 border-base-100 
                <?php if($key == 0): ?> rounded-tl-box <?php endif; ?>
                <?php if($nota->id == $notaSelecionada->id): ?> bg-base-200 <?php endif; ?>">
            <?=$nota->titulo?> <br/>
            <span class="text-xs">id: <?=$nota->id?></span>
        </a>
    <?php endforeach; ?>

</div>

<div class="bg-base-200 rounded-r-box w-full px-10 py-4 flex flex-col space-y-6">
    <form action="/nota" method="POST" id="form-atualizacao">
        <input type="hidden" name="__method" value="PUT" />
        <input type="hidden" name="id" value="<?=$notaSelecionada->id?>" />

        <label class="form-control w-full">
            <div class="mb-2">
                <span class="label-text">Título</span>
            </div>
            <input 
                name="titulo"
                type="text" 
                class="input input-bordered w-full mb-6"
                placeholder="Type here" 
                value="<?=$notaSelecionada->titulo?>"
            />

            <?php if(isset($validacoes['titulo'])) : ?>
                <div class="label text-sm text-error"><?=$validacoes['titulo'][0]?></div>
            <?php endif; ?>
        </label>

        <label class="form-control">
            <div class="mb-2">
                <span class="label-text">Sua nota</span>
            </div>
            <textarea
                <?php if(!session()->get('mostrar')): ?>
                    disabled
                <?php endif; ?>

                name="nota" 
                class="textarea textarea-bordered h-24 w-full" 
                placeholder="Escreva aqui..."><?=$notaSelecionada->nota() ?>
            </textarea>
            
            <?php if(isset($validacoes['nota'])) : ?>
                <div class="label text-sm text-error"><?=$validacoes['nota'][0]?></div>
            <?php endif; ?>
        </label>
    </form>

    <div class="flex items-center justify-between">
        
        <form action="/nota" method="POST">
            <input type="hidden" name="__method" value="DELETE" />
            <input type="hidden" name="id" value="<?=$notaSelecionada->id?>" />

            <button class="btn btn-error" type="submit">Deletar</button>
        </form>
        
        <button class="btn btn-primary" type="submit" form="form-atualizacao">Atualizar</button>
    </div>
</div>