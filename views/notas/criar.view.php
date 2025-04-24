<div class="mx-auto max-w-screen-xl h-screen flex flex-col">
    <div class="navbar bg-base-100 shadow-sm">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">LockBox</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
            <li><a>Link</a></li>
            <li>
                <details>
                <summary><?=auth()->nome?></summary>
                <ul class="bg-base-100 rounded-t-none p-2">
                    <li><a href="/logout">Logout</a></li>
                </ul>
                </details>
            </li>
            </ul>
        </div>
    </div>

    <div class="flex space-x-4 w-full">
        <form class="w-full">
            <label class="input w-full">

            <input type="text" name="pesquisar" class="grow" placeholder="Pesquisar notas..." />
            
            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g
                stroke-linejoin="round"
                stroke-linecap="round"
                stroke-width="2.5"
                fill="none"
                stroke="currentColor"
                >
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
                </g>
            </svg>

            </label>
        </form>

        <a href="/notas/criar" class="btn btn-primary">+ Item</a>
    </div>

    <div class="h-svh flex flex-grow py-6">
        <div class="bg-base-300 rounded-l-box w-56">
            <li><a>Item 1</a></li>
            <li><a>Item 2</a></li>
            <li><a>Item 3</a></li>
        </div>

        <div class="bg-base-200 rounded-r-box w-full p-10">
           <form action="/notas/criar" method="post" class="flex flex-col space-y-6">
                <label class="form-control w-full">
                    <div>
                        <span class="label-text">Título</span>
                    </div>
                    <input type="text" class="input input-bordered w-full" placeholder="Type here" />
                </label>

                <label class="form-control">
                    <div>
                        <span class="label-text">Sua nota</span>
                    </div>
                    <textarea class="textarea textarea-bordered h-24 w-full" placeholder="Bio"></textarea>
                </label>

                <div class="flex items-center justify-end">
                    <button class="btn btn-primary">Salvar</button>
                </div>
           </form>
        </div>
    </div>
</div>