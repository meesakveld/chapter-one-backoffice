<div class="flex flex-col gap-6 overflow-hidden">
    <div class="flex flex-col gap-4">
        <?php
            $h1title = "Authors";
            include_once '../partials/h1.php';
        ?>

        <div class="w-full flex gap-2">
            <?php
                $links = [
                    [ 'title' => 'Books', 'url' => '/books', 'active' => false, ],
                    [ 'title' => 'Authors', 'url' => '/authors', 'active' => true, ],
                    [ 'title'=> 'Publishers','url'=> '/publishers', 'active'=> false, ],
                    [ 'title'=> 'Categories','url'=> '/categories', 'active'=> false, ],
                ];
                foreach ($links as $link) {
                    include '../partials/link-card.php';
                }
            ?>
        </div>
    </div>

    <div class="flex flex-col gap-8 w-full bg-c-blue-very-light rounded-lg p-4">
        <h2 class="text-2xl font-semibold">All authors</h2>

        <div class="overflow-x-auto">
            <table class="min-w-[1200px] w-full border-collapse border border-c-blue-dark">
                <thead class="bg-c-blue-very-light">
                    <tr class="text-c-blue-dark">
                        <th class="text-left border border-c-blue-dark p-2">Name</th>
                        <th class="text-left border border-c-blue-dark p-2">Bio</th>
                        <th class="text-left border border-c-blue-dark p-2">Nationality</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($authors as $author) {
                            require '../partials/author-line.php';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>