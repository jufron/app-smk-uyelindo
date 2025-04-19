var ppdbConfig = {
    series: [{
        data: [21, 22, 10, 28, 16]
    }],
    chart: {
        height: 350,
        type: 'bar',
        events: {
            click: function(chart, w, e) {
                // console.log(chart, w, e)
            }
        }
    },
    colors: ['#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0'],
    plotOptions: {
        bar: {
            columnWidth: '45%',
            distributed: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false
    },
    xaxis: {
        categories: [
            '2021',
            '2022',
            '2023',
            '2024',
            '2025',
        ],
        labels: {
            style: {
                colors: ['#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0'],
                fontSize: '16px'
            }
        }
    }
};

const ppdbpStatistic = new ApexCharts(document.querySelector("#areaChart"), ppdbConfig);
ppdbpStatistic.render();
