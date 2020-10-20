$(function() {
    $.ajax({

        url: 'http://localhost/unclejack/chart_datadaily.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "Uncle Jack Daily Sales in 2020",
                "xAxisName": "Days",
                "yAxisName": " Total Sales (RM) ",
                "rotatevalues": "1",
                "theme": "zune"
            };

            apiChart = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container',
                width: '1850',
                height: '900',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        }
    });
});