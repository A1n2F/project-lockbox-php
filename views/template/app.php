<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LockBox</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<div class="mx-auto max-w-screen-xl h-screen flex flex-col space-y-4">
    <?php require base_path('views/partials/_navbar.view.php'); ?>

    <?php require base_path('views/partials/_pesquisar.view.php'); ?>

    <?php require base_path('views/partials/_mensagem.view.php'); ?>

    <div class="flex flex-grow pb-6">
        <?php require base_path("views/{$view}.view.php"); ?>
    </div>
</div>
</body>
</html>