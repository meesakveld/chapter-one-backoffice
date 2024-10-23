<div class="flex flex-col gap-6 overflow-hidden">
    <div class="flex flex-col gap-4">
        <?php
        $h1title = "Statuses";
        include_once '../partials/h1.php';
        ?>

        <div class="w-full flex gap-2">
            <?php
            $links = [
                ['title' => 'Orders', 'url' => '/orders', 'active' => false,],
                ['title' => 'Statuses', 'url' => '/order-statuses', 'active' => true,],
            ];
            foreach ($links as $link) {
                include '../partials/link-card.php';
            }
            ?>
        </div>
    </div>

    <div class="flex flex-col gap-8 w-full bg-c-blue-very-light rounded-lg p-4">
        <h2 class="text-2xl font-semibold">All statuses</h2>

        <div class="overflow-x-auto">
            <table class="min-w-[1200px] w-full border-collapse border border-c-blue-dark">
                <thead class="bg-c-blue-very-light">
                    <tr class="text-c-blue-dark">
                        <th class="text-left border border-c-blue-dark p-2">Status ID</th>
                        <th class="text-left border border-c-blue-dark p-2">Name</th>
                        <th class="text-left border border-c-blue-dark p-2"><a href="/orders" class="hover:underline">Total Orders</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($statuses as $status) {
                        require '../partials/status-line.php';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>