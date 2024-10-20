<div class="flex flex-col gap-6 overflow-hidden">

    <div class="flex flex-col gap-4">
        <?php
            $h1title = $title;
            include_once '../partials/h1.php';
        ?>

    </div>

    <div class="flex gap-3">
        <a href="/books" class="hover:underline">Books</a>
        <span>></span>
        <p class="font-medium text-c-blue"><?= $title ?></p>
    </div>

</div>