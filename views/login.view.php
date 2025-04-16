<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>

        <form class="p-4 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Email</label>
                <input 
                    type="email" 
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
                />
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Senha</label>
                <input 
                    type="password" 
                    name="senha" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
                />
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md cursor-pointer
            hover:bg-stone-800 transition-colors hover:text-lime-500">
                Logar
            </button>
        </form>
    </div>

    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registro</h1>

        <form class="p-4 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Nome</label>
                <input 
                    type="text" 
                    name="text" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
                />
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Email</label>
                <input 
                    type="email" 
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
                />
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Confirme seu email</label>
                <input 
                    type="email" 
                    name="email_confirmacao" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
                />
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-2">Senha</label>
                <input 
                    type="password" 
                    name="senha" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
                />
            </div>

            <button type="reset" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md cursor-pointer
            hover:bg-stone-800 transition-colors hover:text-red-500">
                Cancelar
            </button>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md cursor-pointer
            hover:bg-stone-800 transition-colors hover:text-lime-500">
                Registrar
            </button>
        </form>
    </div>
</div>