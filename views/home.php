<div class="flex flex-col gap-6">
    <div class="flex flex-col gap-1 w-full bg-c-blue-very-light p-4 rounded-lg">
        <h1 class="text-3xl font-semibold">Dashboard</h1>
    </div>

    <article class="flex flex-col md:flex-row gap-x-4 gap-y-8 w-full bg-c-blue-very-light rounded-lg p-4">

        <section class="flex flex-col gap-4 md:w-1/2">
            <h2 class="text-2xl font-semibold">Key Metrics</h2>

            <div class="flex flex-col gap-4 w-full">
                <?php 
                    $cardTitle = "Total Sales"; $amound = "€" . $totalSales;
                    include '../partials/key-metric-card.php'; 
                ?>
                <?php 
                    $cardTitle = "Books Sold"; $amound = $totalBooksSold;
                    include '../partials/key-metric-card.php'; 
                ?>
                <?php 
                    $cardTitle = "Total Users"; $amound = $totalUsers;
                    include '../partials/key-metric-card.php'; 
                ?>
            </div>

        </section>

        <section class="flex flex-col gap-4 md:w-1/2">
            <h2 class="text-2xl font-semibold">Sales and Inventory Trends</h2>
            
            <?php 
                $id="monthly-sales"; $chartTitle="Monthly Sales"; $label="# of monthly sales"; $typeOfChard="line";
                $arrayOfData=$totalSalesPerMonth; $xAxisVariable="month"; $yAxisVariable="total_revenue";
                include '../partials/chart-card.php'; 
            ?>
            
        </section>
    
    </article>

</div>