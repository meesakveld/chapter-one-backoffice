<tr class="even:bg-c-blue-light">
    <td class="border border-c-blue-dark p-2"><a class="hover:underline" href="/categories/<?= $category->id ?>"><?= $category->name ?></a></td>
    <td class="border border-c-blue-dark p-2"><?= $category->description ?></td>
    <td class="border border-c-blue-dark p-2"><a href="/categories/<?= $category->parent_category_id ?>"class="hover:underline"><?= $category->parent_category_name ?></a></td>
    <td class="border border-c-blue-dark p-2">
        <?php
            if ($category->children_categories_names) {
                $category->children_categories_names = explode(", ", $category->children_categories_names);
                $category->children_categories_ids = explode(", ", $category->children_categories_ids);
                
                for ($i = 0; $i < count($category->children_categories_names); $i++) {
                    echo "<a class='hover:underline' href='/categories/{$category->children_categories_ids[$i]}'>{$category->children_categories_names[$i]}</a>";
                    if ($i < count($category->children_categories_names) - 1) {
                        echo ", ";
                    }
                }
            } else {
                echo '';
            }
        ?>
    </td>
</tr>