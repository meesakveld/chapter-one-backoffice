<div class="flex flex-col gap-6 overflow-hidden">
    <div class="flex flex-col gap-4">
        <?php
            $h1title = "Users";
            include_once '../partials/h1.php';
        ?>
    </div>

    <div class="flex flex-col gap-8 w-full bg-c-blue-very-light rounded-lg p-4">
        <h2 class="text-2xl font-semibold">All users</h2>

        <div class="overflow-x-auto">
            <table class="min-w-[1200px] w-full border-collapse border border-c-blue-dark">
                <thead class="bg-c-blue-very-light">
                    <tr class="text-c-blue-dark">
                        <th class="text-left border border-c-blue-dark p-2">Fullname</th>
                        <th class="text-left border border-c-blue-dark p-2">Firstname</th>
                        <th class="text-left border border-c-blue-dark p-2">Lastname</th>
                        <th class="text-left border border-c-blue-dark p-2">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($users as $user) {
                            require '../partials/user-line.php';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>