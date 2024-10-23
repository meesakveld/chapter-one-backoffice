<div class="flex flex-col gap-8 overflow-hidden">

    <div class="flex gap-3">
        <a href="/orders" class="hover:underline">Orders</a>
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
                    <p class="font-normal text-c-blue">Order id:</p>
                    <p class="font-medium text-lg"><?= $title ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Total items:</p>
                    <p class="font-medium text-lg"><?= $order->total_items ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Total price:</p>
                    <p class="font-medium text-lg">€ <?= $order->total_price ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Order date:</p>
                    <p class="font-medium text-lg"><?= $order->order_date ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">Status:</p>
                    <p class="font-medium text-lg"><?= $order->status ?></p>
                </div>

                <div>
                    <p class="font-normal text-c-blue">User:</p>
                    <p class="font-medium text-lg"><a href="/users/<?= $order->user_id ?>" class="hover:underline"><?= $order->user_full_name ?></a></p>
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
                            <th class="text-left border border-c-blue-dark p-2">Quantity</th>
                            <th class="text-left border border-c-blue-dark p-2">Item</th>
                            <th class="text-left border border-c-blue-dark p-2">Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            // Loop through each item in the order
                            foreach ($order->getOrderItems() as $orderItem) {
                                ?>
                                <tr class="even:bg-c-blue-light">
                                    <td class="border border-c-blue-dark p-2"><?= $orderItem->quantity ?></td>
                                    <td class="border border-c-blue-dark p-2"><a href="/books/<?= $orderItem->book_id ?>" class="hover:underline"><?= $orderItem->title ?></a></td>
                                    <td class="border border-c-blue-dark p-2">€ <?= $orderItem->price ?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>

    </div>

</div>