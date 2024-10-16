<div class="p-4 bg-c-blue-light rounded-lg flex flex-col gap-2 w-full h-full">
    
    <h3 class="text-xl font-semibold"><?= $chartTitle ?></h3>
    <canvas id="<?= $id ?>"></canvas>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        new Chart(document.getElementById('<?= $id ?>'), {
            type: '<?= $typeOfChard ?>',
            data: {
                labels: <?= json_encode(array_column($arrayOfData, $xAxisVariable)); ?>,
                datasets: [{
                    label: '<?= $label ?>',
                    data: <?= json_encode(array_column($arrayOfData, $yAxisVariable)); ?>,
                    fill: true,
                    borderColor: '#1E65B8',
                    borderWidth: 3,
                    tension: 0.1
                }]
            }
        });
    </script>

</div>
