<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-stone-950 text-stone-300">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-xl flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">
                Book Wise
            </div>

            <ul class="flex gap-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>

                <?php if(auth()): ?>
                    <li><a href="/meus-livros" class="hover:underline">Meus Livros</a></li>
                <?php endif; ?>
            </ul>

            <ul>
                <?php if(auth()): ?>
                    <div class="flex gap-2">
                        <li><span>Oi, <?=auth()->nome?></span></li>
                        <li><a href="/logout" class="hover:underline">Sair</a></li>
                    </div>
                <?php else: ?>
                    <li><a href="/login" class="hover:underline">Fazer login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    
    <main class="mx-auto max-w-screen-xl">
        <?php if($mensagem = flash()->get('mensagem')): ?>
            <div class="border-green-800 bg-green-900 text-green-400 font-bold px-4 py-2 rounded-md text-center">
                <?=$mensagem?>
            </div>
        <?php endif; ?>

        <?php require "../views/{$view}.view.php"; ?>
    </main>
</body>
</html>