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
      <form method="post" action="/registrar">
        
        <div class="card">
          <div class="card-body">

            <div class="card-title text-xl mb-2">Registrar</div>
            <label class="form-control">
              <div class="label mb-1">
                <span class="label-text text-black">Nome</span>
              </div>
              <input type="text" class="input input-bordered border border-gray-300 w-full max-w-xs bg-white" />
            </label>

            <label class="form-control">
              <div class="label mb-1">
                <span class="label-text text-black">E-mail</span>
              </div>
              <input type="text" class="input input-bordered border border-gray-300 w-full max-w-xs bg-white" />
            </label>

            <label class="form-control">
              <div class="label mb-1">
                <span class="label-text text-black">Confirme seu e-mail</span>
              </div>
              <input type="text" class="input input-bordered border border-gray-300 w-full max-w-xs bg-white" />
            </label>

            <label class="form-control">
              <div class="label mb-1">
                <span class="label-text text-black">Senha</span>
              </div>
              <input type="password" class="input input-bordered border border-gray-300 w-full max-w-xs bg-white" />
            </label>

            <div class="card-actions">
              <button class="btn btn-primary btn-block">Registrar</button>
              <a href="/login" class="btn btn-link">Já tenho uma conta</a>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>