<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($title ?? '') . ' | ' . $_ENV['SITE_NAME'] ?></title>
    <link rel="stylesheet" href="/css/output.css?v=<?php if ($_ENV['DEV_MODE'] == "true") {
        echo time();
    }
    ; ?>">
</head>

<body class="bg-c-background text-c-black">
    <?php include_once '../partials/header.php' ?>

    <main class="p-4 max-w-[1680px] m-auto">
        <?= $content; ?>
    </main>

    <footer>
        <p class="w-full text-center text-c-gray">
            &copy; <?= date('Y'); ?> - Chapter One
        </p>
    </footer>
</body>

</html>