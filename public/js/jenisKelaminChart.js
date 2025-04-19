const jenisKelaminConfig = {
    series: [{
        data: [21, 22],
        name: 'Total'
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
    colors: ['#008FFB', '#00E396'],
    plotOptions: {
        bar: {
            columnWidth: '45%',
            distributed: true,
        }
    },
    dataLabels: {
        enabled: true,
        style: {
            fontSize: '14px'
        }
    },
    legend: {
        show: false
    },
    xaxis: {
        categories: [
            'laki-laki',
            'perempuan',
        ],
        labels: {
            style: {
                colors: ['#008FFB', '#00E396'],
                fontSize: '16px'
            }
        }
    }
};

var chart = new ApexCharts(document.querySelector("#jenisKelaminChart"), jenisKelaminConfig);
chart.render();