<?php if($mensagem = flash()->get('mensagem')) : ?>
    <div role="alert" class="alert bg-green-800">
        <span><?=$mensagem?></span>
    </div>
<?php endif; ?>