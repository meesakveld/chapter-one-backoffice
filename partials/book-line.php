<tr class="even:bg-c-blue-light">
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/books/<?= $book->id ?>"><?= $book->title ?></a></td>
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/authors/<?= $book->author_id ?>"><?= $book->author ?></a></td>
    <td class="border border-c-blue-dark p-2">
        <?php
            $category_ids = explode(",", $book->category_ids);
            $category_names = explode(",", $book->category_names);
            for ($i = 0; $i < count($category_ids); $i++) {
                echo "<a class='hover:underline' href='/categories/$category_ids[$i]'>$category_names[$i]</a>";
                if ($i < count($category_ids) - 1) {
                    echo ", ";
                }
            }
        ?>
    </td>
    <td class="border border-c-blue-dark p-2"><?= "€ " . $book->price ?></td>
    <td class="border border-c-blue-dark p-2"><?= $book->stock ?></td>
    <td class="border border-c-blue-dark p-2"><?= $book->published ?></td>
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/publishers/<?= $book->publisher_id ?>"><?= $book->publisher ?></a></td>
</tr>