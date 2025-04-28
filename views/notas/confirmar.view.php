<?php $validacoes = flash()->get('validacoes'); ?>

<div class="bg-base-300 rounded-box w-full text-3xl font-bold pt-20 flex flex-col items-center">
   <form action="/mostrar" method="POST" class="max-w-lg flex flex-col gap-4">
        <div class="text-center">Digite a sua senha novamente para começar a ver todas as suas notas descriptografadas</div>

        <label class="form-control flex flex-col">
            <div class="label mb-1">
                <span class="label-text text-lg">Senha</span>
            </div>
            <input 
            type="password" 
            name="senha" 
            class="input input-bordered border border-gray-300 w-full bg-white text-black" 
            />

            <?php require base_path('views/partials/_mensagem.view.php'); ?>

            <?php if(isset($validacoes['senha'])) : ?>
                <div class="label text-sm text-error"><?=$validacoes['senha'][0]?></div>
            <?php endif; ?>
        </label>

        <button class="btn btn-primary">
            Abrir minhas notas
        </button>
   </form>
</div>