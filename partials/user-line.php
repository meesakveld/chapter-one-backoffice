<tr class="even:bg-c-blue-light">
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/users/<?= $user->id ?>"><?= $user->firstname . ' ' . $user->lastname ?></a></td>
    <td class="border border-c-blue-dark p-2"><?= $user->firstname ?></td>
    <td class="border border-c-blue-dark p-2"><?= $user->lastname ?></td>
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="mailto:<?= $user->email ?>"><?= $user->email ?></a></td>
</tr>