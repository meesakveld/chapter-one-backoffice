<tr class="even:bg-c-blue-light">
    <td class="border border-c-blue-dark p-2"><img class="h-12 w-12" src="/uploaded-images/<?= $publisher->logo_path ?>" alt="<?= $publisher->name ?> logo"></td>
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/publishers/<?= $publisher->id ?>"><?= $publisher->name ?></a></td>
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="mailto:<?= $publisher->email ?>"><?= $publisher->email ?></a></td>
</tr>