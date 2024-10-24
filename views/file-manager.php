<div class="flex flex-col gap-6 overflow-hidden">
    <div class="flex flex-col gap-4">
        <?php
        $h1title = "File manager";
        include_once '../partials/h1.php';
        ?>
    </div>

    <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-4">

            <h2 class="text-xl font-bold">Uploaded images</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php foreach ($images as $image): ?>
                    <?php if ($image !== '.' && $image !== '..'): ?>
                        <div class="flex flex-col gap-2">
                            <img src="/uploaded-images/<?= $image ?>" alt="<?= $image ?>" class="w-full h-48 object-cover">
                            <div class="flex gap-2">
                                <a href="/uploaded-images/<?= $image ?>" target="_blank"
                                    class="p-2 bg-c-blue text-white rounded">View</a>
                                <a href="/file-manager/delete/<?= $image ?>" class="p-2 bg-c-red text-white rounded">Delete</a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

</div>