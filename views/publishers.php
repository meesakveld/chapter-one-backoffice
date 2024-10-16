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
                ];
                foreach ($links as $link) {
                    include '../partials/link-card.php';
                }
            ?>
        </div>
    </div>

    

</div>