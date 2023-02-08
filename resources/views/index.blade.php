<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Apexchart Laravel</title>
</head>
<body>
    <div id="app" class="page">
        <div class="flex-fill">
            <div class="my-3 my-md-5">
                <div class="container">
                    <h1>Apexchart Laravel</h1>
                    <div class="row justify-content-center">

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Jenis Chart</div>
                                <div class="card-body">
                                    <div id="chart1">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/apexcharts.js') }}"></script>
</body>
</html>

<script>
    var options = {
        series: [44, 55, 41, 17, 15],
        chart: {
            type: 'donut',
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
</script>
