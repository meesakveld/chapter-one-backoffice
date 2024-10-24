<div class="flex flex-col gap-6 overflow-hidden">
    <div class="flex flex-col gap-4">
        <?php
            $h1title = "Authors";
            include_once '../partials/h1.php';
        ?>

        <div class="w-full flex gap-2">
            <?php
                $links = [
                    [ 'title' => 'Books', 'url' => '/books', 'active' => false, ],
                    [ 'title' => 'Authors', 'url' => '/authors', 'active' => true, ],
                    [ 'title'=> 'Publishers','url'=> '/publishers', 'active'=> false, ],
                    [ 'title'=> 'Categories','url'=> '/categories', 'active'=> false, ],
                ];
                foreach ($links as $link) {
                    include '../partials/link-card.php';
                }
            ?>
        </div>
    </div>

    <div class="flex flex-col gap-8 w-full bg-c-blue-very-light rounded-lg p-4">
        <h2 class="text-2xl font-semibold">All authors</h2>

        <form class="flex flex-col gap-4 md:flex-row md:gap-8 md:items-end">
            <div class="flex flex-col gap-1">
                <label for="search">Search authors</label>
                <input type="text" name="search" placeholder="Search authors" class="w-full p-2 border border-c-blue-dark rounded-lg" value="<?= $search ?>">
            </div>
            
            <div class="flex flex-col gap-1">
                <label for="filter-nationality">Filter on nationality</label>
                <select name="filter-nationality" class="w-full p-2 border border-c-blue-dark rounded-lg">
                    <option value="">All nationalities</option>
                    <?php
                        foreach ($nationalities as $nationality) {
                            echo "<option value='{$nationality[0]}' " . ($filterNationality === $nationality[0] ? 'selected' : '') . ">{$nationality[0]}</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="flex flex-col gap-1">
                <label for="sort-name">Sort on name</label>
                <select name="sort-name" class="w-full p-2 border border-c-blue-dark rounded-lg">
                    <option value="asc" <?= $sortName === 'asc' ? 'selected' : '' ?>>A-Z</option>
                    <option value="desc" <?= $sortName === 'desc' ? 'selected' : '' ?>>Z-A</option>
                </select>
            </div>

            <div class="flex gap-2">
                <a href="/authors" class="w-64 md:w-auto bg-c-gray text-white p-2 rounded-lg flex justify-center">Clear</a>
                <button type="submit" class="w-64 md:w-auto bg-c-blue-dark text-white p-2 rounded-lg">Search</button>
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-[1200px] w-full border-collapse border border-c-blue-dark">
                <thead class="bg-c-blue-very-light">
                    <tr class="text-c-blue-dark">
                        <th class="text-left border border-c-blue-dark p-2">Name</th>
                        <th class="text-left border border-c-blue-dark p-2">Bio</th>
                        <th class="text-left border border-c-blue-dark p-2">Nationality</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($authors as $author) {
                            require '../partials/author-line.php';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>