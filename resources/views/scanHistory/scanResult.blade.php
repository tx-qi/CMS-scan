<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scan Result') }}
        </h2>
    </x-slot>

    <head>
        <title>Pie Chart Integration in Laravel 8</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">
            <h2 style="text-align: center;">Pie Chart Integration in Laravel 8</h2>
            <div class="panel panel-primary">
                <div class="panel-heading">Pie Chart Integration in Laravel 8</div>
                <div class="panel-body">
                    <div id="pie-chart"></div>
                </div>
            </div>
        </div>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <script>
            $(function() {
                Highcharts.chart('pie-chart', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Vulnerability Percentage'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                            }
                        }
                    } ,
                     series: [{
                        name: 'Browsers',
                        colorByPoint: true,
                        data: <?= $data ?>
                    }]
                });
            });
        </script>

     /* <div><br><br>
        <div class="wrap">
            <div class="search" style="text-align: center">
               <input type="text" class="searchTerm" placeholder="Please enter scanned website">
               <button type="submit" class="searchButton">
                 <i class="fa fa-search"></i>
              </button>
            </div>
     </div> </div> */
</x-app-layout>
