
<div>
    Chart page here
    <p>Shows yesterdays option prices by the minute</p>
    <canvas id="chart"></canvas>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/luxon@3.4.4"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.3.1"></script>
<script src="./chartjs-chart-financial.js" type="text/javascript"></script>
@endassets

    <script>
        var barData = @json($data);

        var ctx = document.getElementById('chart').getContext('2d');
        ctx.canvas.width = 1000;
        ctx.canvas.height = 250;

            var chart = new Chart(ctx, {
                type: 'candlestick',
                data: {
                    datasets: [{
                    label: '{{$label}}',
                    data: barData,
                    }]
                }
            });
</script>
