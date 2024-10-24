<div class="flex flex-col gap-8 overflow-hidden">

    <div class="flex gap-3">
        <a href="/publishers" class="hover:underline">Publishers</a>
        <span>></span>
        <a href="/publishers/<?= $publisher->id ?>" class="hover:underline text-c-blue"><?= $publisher->name ?></a>
        <span>></span>
        <p class="font-medium text-c-blue"><?= $title ?></p>
    </div>

    <div class="flex flex-col gap-4">
        <?php
        $h1title = $title;
        include_once '../partials/h1.php';
        ?>
    </div>

    <div class="flex flex-col gap-8">

        <div class="flex flex-col gap-3 border border-c-gray rounded-lg p-4">

            <form action="/publishers/<?= $publisher->id ?>/edit" method="post" enctype="multipart/form-data" class="flex flex-col gap-4">

                <div class="flex flex-col gap-4">
                    <div class="w-full flex flex-col gap-1">
                        <label for="name" class="text-c-gray">Name</label>
                        <input type="text" name="name" id="name" class="w-full border border-c-gray rounded-lg p-2" value="<?= $publisher->name ?>"
                            required>
                    </div>

                    <div class="w-full flex flex-col gap-1">
                        <label for="email" class="text-c-gray">Email</label>
                        <input type="email" name="email" id="email" value="<?= $publisher->email ?>"
                            class="w-full border border-c-gray rounded-lg p-2" required>
                    </div>

                    <div class="w-full flex flex-col gap-1">
                        <label for="logo" class="text-c-gray">Logo</label>
                        <img src="/uploaded-images/<?= $publisher->logo_path ?>" alt="<?= $publisher->name ?>" class="w-24 h-24 object-cover rounded-lg">
                        <input type="file" name="logo" id="logo" class="w-full border border-c-gray rounded-lg p-2" accept="image/*" required>
                    </div>
                </div>

                <button type="submit" class="bg-c-blue-dark text-white px-4 py-1 rounded-lg flex items-center hover:underline">Save</button>

            </form>

        </div>

    </div>

</div>