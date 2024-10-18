<div class="flex flex-col gap-6 overflow-hidden">
    <div class="flex flex-col gap-4">
        <?php
        $h1title = "Categories";
        include_once '../partials/h1.php';
        ?>

        <div class="w-full flex gap-2">
            <?php
            $links = [
                ['title' => 'Books', 'url' => '/books', 'active' => false,],
                ['title' => 'Authors', 'url' => '/authors', 'active' => false,],
                ['title' => 'Publishers', 'url' => '/publishers', 'active' => false,],
                ['title' => 'Categories', 'url' => '/categories', 'active' => true,],
            ];
            foreach ($links as $link) {
                include '../partials/link-card.php';
            }
            ?>
        </div>
    </div>

    <div class="flex flex-col gap-8 w-full bg-c-blue-very-light rounded-lg p-4">
        <h2 class="text-2xl font-semibold">All categories</h2>

        <div class="overflow-x-auto">
            <table class="min-w-[1200px] w-full border-collapse border border-c-blue-dark">
                <thead class="bg-c-blue-very-light">
                    <tr class="text-c-blue-dark">
                        <th class="text-left border border-c-blue-dark p-2">Name</th>
                        <th class="text-left border border-c-blue-dark p-2">Description</th>
                        <th class="text-left border border-c-blue-dark p-2">Parent Category</th>
                        <th class="text-left border border-c-blue-dark p-2">Children Categories</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($categories as $category) {
                        require '../partials/category-line.php';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>