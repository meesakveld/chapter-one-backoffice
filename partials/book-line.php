<tr class="even:bg-c-blue-light">
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/books/<?= $book['id'] ?>"><?= $book['title'] ?></a></td>
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/authors/<?= $book['author_id'] ?>"><?= $book['author'] ?></a></td>
    <td class="border border-c-blue-dark p-2"><?= "€ " . $book['price'] ?></td>
    <td class="border border-c-blue-dark p-2"><?= $book['stock'] ?></td>
    <td class="border border-c-blue-dark p-2"><?= $book['published'] ?></td>
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/publishers/<?= $book['publisher_id'] ?>"><?= $book['publisher'] ?></a></td>
</tr>