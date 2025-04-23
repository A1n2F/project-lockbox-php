<div class="mx-auto max-w-screen-xl">
    <div class="navbar bg-base-100 shadow-sm">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">LockBox</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
        <li><a>Link</a></li>
        <li>
            <details>
            <summary><?=$user->nome?></summary>
            <ul class="bg-base-100 rounded-t-none p-2">
                <li><a href="/logout">Logout</a></li>
            </ul>
            </details>
        </li>
        </ul>
    </div>
    </div>
</div>