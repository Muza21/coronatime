<html>

<head>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['day', 'Sales'],
                ['1', 1000],
                ['2', 1170],
                ['3', 660],
                ['4', 1030]
            ]);

            var options = {
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="curve_chart" style="width: 200px; height: 150px; background-color: form::transparent"></div>
</body>

</html>
