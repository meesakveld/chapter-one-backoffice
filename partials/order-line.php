<tr class="even:bg-c-blue-light">
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/orders/<?= $order->id ?>"><?= $order->id ?></a></td>
    <td class="border border-c-blue-dark p-2"><?= $order->total_items ?></td>
    <td class="border border-c-blue-dark p-2"><?= "€ " . $order->total_price ?></td>
    <td class="border border-c-blue-dark p-2"><?= $order->status ?></td>
    <td class="border border-c-blue-dark p-2"><?= $order->order_date ?></td>
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/users/<?= $order->user_id ?>"><?= $order->user_full_name ?></a></td>
</tr>