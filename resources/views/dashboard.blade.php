<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .canvas-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 80vh;
        }
        </style>
</head>
<body>
    <div class="canvas-container">
    <canvas id="chart10tahun" width="200" height="200"></canvas>
</div>

    <script>
    var ctx = document.getElementById('chart10tahun').getContext('2d');

    var chartData = {!! json_encode($data) !!};
    var labels = [];
    var data = [];

    chartData.forEach(function(record) {
        labels.push(record.kota_id);
        data.push(record.jenis_kelamin);
    });

    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                label: '# of Votes',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            cutoutPercentage: 50,
        }
    });
    </script>

</body>
</html>


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="chart10tahun"></canvas>

    @foreach ($data as $record)
        <p>{{ $record->nama }}</p>
    @endforeach

    <script>
    var ctx = document.getElementById('chart10tahun').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            cutoutPercentage: 50,
        }
    });
</script>

</body>
</html> -->
