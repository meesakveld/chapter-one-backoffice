<div class="flex flex-col gap-8 overflow-hidden">

    <div class="flex gap-3">
        <a href="/users" class="hover:underline">Users</a>
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
                    <p class="font-normal text-c-blue">Name:</p>
                    <p class="font-medium text-lg"><?= $title ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Email:</p>
                    <p class="font-medium text-lg"><a href="mailto:<?= $user->email ?>"><?= $user->email ?></a></p>
                </div>

            </div>

            <hr class="border-c-gray-light">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="font-normal text-c-blue">Total orders:</p>
                    <p class="font-medium text-lg"><?= $user->totalOrders() ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Total spent:</p>
                    <p class="font-medium text-lg">€ <?= $user->totalSpent() ?></p>
                </div>
            </div>

        </div>

        <hr class="border-c-gray-light my-4">

        <div class="flex flex-col gap-8 w-full rounded-lg">
            <h2 class="text-2xl font-semibold rounded-lg">
                Books
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