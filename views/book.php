<div class="flex flex-col gap-8 overflow-hidden">

    <div class="flex gap-3">
        <a href="/books" class="hover:underline">Books</a>
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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="font-normal text-c-blue">Title:</p>
                    <p class="font-medium text-lg"><?= $title ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Author:</p>
                    <p class="font-medium text-lg"><a href="/authors/<?= $book->author_id ?>"
                            class="hover:underline"><?= $book->author ?></a></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Published:</p>
                    <p class="font-medium text-lg"><?= $book->published ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Publisher:</p>
                    <p class="font-medium text-lg"><a href="/publishers/<?= $book->publisher_id ?>"
                            class="hover:underline"><?= $book->publisher ?></a></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Categories:</p>
                    <p class="font-medium text-lg">
                        <?php
                        $categories = explode(', ', $book->category_names);
                        $categoriesIds = explode(', ', $book->category_ids);
                        for ($i = 0; $i < count($categories); $i++) { {
                                $category = $categories[$i];
                                $categoryId = $categoriesIds[$i];
                                echo "<a href='/categories/$categoryId' class='hover:underline'>$category</a>";
                                if ($i < count($categories) - 1) {
                                    echo ', ';
                                }
                            }
                        }
                        ?>
                    </p>
                </div>

            </div>

            <hr class="border-c-gray-light">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <p class="font-normal text-c-blue">Price:</p>
                    <p class="font-medium text-lg">€ <?= $book->price ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Stock:</p>
                    <p class="font-medium text-lg"><?= $book->stock ?></p>
                </div>

            </div>

        </div>

        <hr class="border-c-gray-light my-4">

        <div class="flex flex-col gap-8 w-full rounded-lg">
            <h2 class="text-2xl font-semibold rounded-lg">
                Orders
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-[1200px] w-full border-collapse border border-c-blue-dark">
                    <thead class="bg-c-blue-very-light">
                        <tr class="text-c-blue-dark">
                            <th class="text-left border border-c-blue-dark p-2">Order ID</th>
                            <th class="text-left border border-c-blue-dark p-2">Total Items</th>
                            <th class="text-left border border-c-blue-dark p-2">Total Price</th>
                            <th class="text-left border border-c-blue-dark p-2"><a href="/order-statuses" class="hover:underline">Status</a></th>
                            <th class="text-left border border-c-blue-dark p-2">Order Date</th>
                            <th class="text-left border border-c-blue-dark p-2"><a href="/users" class="hover:underline">User</a></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        foreach ($orders as $order) {
                            require '../partials/order-line.php';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>