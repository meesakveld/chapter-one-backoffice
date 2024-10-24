<div class="flex flex-col gap-6 overflow-hidden">
    <div class="flex flex-col gap-4">
        <?php
            $h1title = "Publishers";
            include_once '../partials/h1.php';
        ?>

        <div class="w-full flex gap-2">
            <?php
                $links = [
                    [ 'title' => 'Books', 'url' => '/books', 'active' => false, ],
                    [ 'title' => 'Authors', 'url' => '/authors', 'active' => false, ],
                    [ 'title'=> 'Publishers','url'=> '/publishers', 'active'=> true, ],
                    [ 'title'=> 'Categories','url'=> '/categories', 'active'=> false, ],
                ];
                foreach ($links as $link) {
                    include '../partials/link-card.php';
                }
            ?>
        </div>
    </div>

    <div class="flex flex-col gap-8 w-full bg-c-blue-very-light rounded-lg p-4">
        <div class="flex justify-between">
            <h2 class="text-2xl font-semibold">All publishers</h2>
            <a href="/publishers/add" class="bg-c-blue-dark text-white px-4 py-1 rounded-lg flex items-center hover:underline">Add</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-[1200px] w-full border-collapse border border-c-blue-dark">
                <thead class="bg-c-blue-very-light">
                    <tr class="text-c-blue-dark">
                        <th class="text-left border border-c-blue-dark p-2">Logo</th>
                        <th class="text-left border border-c-blue-dark p-2">Name</th>
                        <th class="text-left border border-c-blue-dark p-2">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($publishers as $publisher) {
                            require '../partials/publisher-line.php';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>