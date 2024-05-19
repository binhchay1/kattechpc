$(document).ready(function () {
    let urlGetIncome = '/admin/get-data-for-income';
    let urlGetVisitor = '/admin/get-data-for-visitor';

    $.ajax({
        type: "get",
        url: urlGetIncome,
        success: function (result) {
            var data = [];

            for (var i in result)
                data.push(result[i]);

            renderIncomeChart(data);
        }
    });

    $.ajax({
        type: "get",
        url: urlGetVisitor,
        success: function (result) {
            var data = [];

            for (var i in result)
                data.push(result[i]);

            renderVisitorChart(data);
        }
    });
});

function renderIncomeChart(data) {
    var options = {
        series: [{
            name: "Income",
            data: data
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            },
            margin: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            },
            toolbar: {
                show: false,
            },
        },
        stroke: {
            show: true,
            curve: 'smooth',
            lineCap: 'butt',
            width: 2,
            dashArray: 0,
        },
        dataLabels: {
            enabled: false
        },
        colors: getChartColorsArray("responseTimes"),
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        }
    };

    var chart = new ApexCharts(document.querySelector("#incomeChart"), options);
    chart.render();
}

function renderVisitorChart(data) {
    var options = {
        series: [{
            name: 'Visitor',
            data: data
        },
            // {
            //     name: 'Followers',
            //     data: [10, 18, 13, 23, 33, 39, 30, 21, 36, 42, 39, 46]
            // }
        ],
        chart: {
            height: 350,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        plotOptions: {
            bar: {
                borderRadius: 10,
                dataLabels: {
                    position: 'top',
                },
            }
        },
        dataLabels: {
            enabled: true,
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: ["#304758"]
            }
        },

        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            position: 'bottom',
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                fill: {
                    type: 'gradient',
                    gradient: {
                        colorFrom: '#D8E3F0',
                        colorTo: '#BED1E6',
                        stops: [0, 100],
                        opacityFrom: 0.4,
                        opacityTo: 0.5,
                    }
                }
            },
            tooltip: {
                enabled: true,
            }
        },
        yaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
            }
        },
        stroke: {
            show: true,
            width: 4,
            colors: ['transparent']
        },
        grid: {
            show: false,
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: -10
            },
        },
        colors: getChartColorsArray("pagesInteraction")
    };

    var chart = new ApexCharts(document.querySelector("#visitorChart"), options);
    chart.render();
}







function getChartColorsArray(chartId) {
    const chartElement = document.getElementById(chartId);
    if (chartElement) {
        const colors = chartElement.dataset.chartColors;
        if (colors) {
            const parsedColors = JSON.parse(colors);
            const mappedColors = parsedColors.map((value) => {
                const newValue = value.replace(/\s/g, "");
                if (!newValue.includes("#")) {
                    const element = document.querySelector(newValue);
                    if (element) {
                        const styles = window.getComputedStyle(element);
                        const backgroundColor = styles.backgroundColor;
                        return backgroundColor || newValue;
                    } else {
                        const divElement = document.createElement('div');
                        divElement.className = newValue;
                        document.body.appendChild(divElement);

                        const styles = window.getComputedStyle(divElement);
                        const backgroundColor = styles.backgroundColor.includes("#") ? styles.backgroundColor : rgbToHex(styles.backgroundColor);
                        return backgroundColor || newValue;
                    }
                } else {
                    return newValue;
                }
            });
            return mappedColors;
        } else {
            console.warn(`chart-colors attribute not found on: ${chartId}`);
        }
    }
}
