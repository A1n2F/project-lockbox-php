<div class="grid grid-cols-2">
  <div class="hero min-h-screen flex ml-40">
    <div class="hero-content -mt-20">
      <div>
        <p class="py-1 text-xl">Bem vindo ao</p>
        <h1 class="text-7xl font-bold">LockBox</h1>
        <p class="pyt-2 pb-4 text-xl">onde você guarda <span class="italic">tudo</span> com segurança.</p>
      </div>
    </div>
  </div>

  <div class="bg-white hero min-h-screen mr-40 text-black">
    <div class="hero-content -mt-10">
      <form method="post" action="/login">
        <?php 
          $validacoes = flash()->get('validacoes'); 
          $post = flash()->get('post');
          ?>
        
        <div class="card">
          <div class="card-body">

            <div class="card-title text-xl mb-2">Faça o seu login</div>
            <label class="form-control flex flex-col">
              <div class="label mb-1">
                <span class="label-text text-black">E-mail</span>
              </div>
              <input 
                type="text" 
                name="email" 
                class="input input-bordered border border-gray-300 w-full max-w-xs bg-white" 
                value="<?=old('email')?>" 
                />

              <?php if(isset($validacoes['email'])) : ?>
                <div class="label text-sm text-error"><?=$validacoes['email'][0]?></div>
              <?php endif; ?>
            </label>

            <label class="form-control flex flex-col">
              <div class="label mb-1">
                <span class="label-text text-black">Senha</span>
              </div>
              <input 
                type="password" 
                name="senha" 
                class="input input-bordered border border-gray-300 w-full max-w-xs bg-white" 
                />

              <?php if(isset($validacoes['senha'])) : ?>
                <div class="label text-sm text-error"><?=$validacoes['senha'][0]?></div>
              <?php endif; ?>
            </label>

            <div class="card-actions">
              <button class="btn btn-primary btn-block">Login</button>
              <a href="/registrar" class="btn btn-link">Quero me registrar</a>
            </div>
        </div>

      </form>
    </div>
  </div>
</div>