$.ajax({
  url: `dados.php`,
  method: "GET",
  success: function (data) {
    let Sites = JSON.parse(data);
    console.log(Sites);
    geradorDeChart(Sites);
  },
  error: function (data) {},
});
const geradorDeChart = (Sites) => {
  $(function () {
    "use strict";
    var ticksStyle = {
      fontColor: "#fff",
      fontStyle: "bold",
    };
    var mode = "index";
    var intersect = true;
    var $salesChart = $("#chart-custo");
    var salesChart = new Chart($salesChart, {
      type: "bar",
      data: {
        labels: [
          Sites[0].NomeSite,
          Sites[1].NomeSite,
          Sites[2].NomeSite,
          Sites[3].NomeSite,
          Sites[4].NomeSite,
        ],
        datasets: [
      
          {
            backgroundColor: "#007bff",
            borderColor: "#007bff",
            data: [
              Sites[0].CustoUtilizacao,
              Sites[1].CustoUtilizacao,
              Sites[2].CustoUtilizacao,
              Sites[3].CustoUtilizacao,
              Sites[4].CustoUtilizacao,
            ],
          },
          
        ],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect,
        },
        hover: {
          mode: mode,
          intersect: intersect,
        },
        legend: {
          display: false,
        },
        scales: {
          yAxes: [
            {
              gridLines: {
                display: true,
                lineWidth: "4px",
                color: "rgba(255, 255, 255, .2)",
                zeroLineColor: "transparent",
              },
              ticks: $.extend(
                {
                  beginAtZero: true,
                  callback: function (value) {
                    if (value >= 1000) {
                      value /= 1000;
                      value += " Mil";
                    }
                    return "$" + value;
                  },
                },
                ticksStyle
              ),
            },
          ],
          xAxes: [
            {
              display: true,
              gridLines: {
                display: false,
              },
              ticks: ticksStyle,
            },
          ],
        },
      },
    });
  });
  $(function () {
    "use strict";
    var ticksStyle = {
      fontColor: "#fff",
      fontStyle: "bold",
    };
    var mode = "index";
    var intersect = true;
    var $chartSalario = $("#chart-salario");
    var chartSalario = new Chart($chartSalario, {
      type: "bar",
      data: {
        labels: [
          Sites[0].NomeSite,
          Sites[1].NomeSite,
          Sites[2].NomeSite,
          Sites[3].NomeSite,
          Sites[4].NomeSite,
        ],
        datasets: [
          {
            backgroundColor: "#ced4da",
            borderColor: "#ced4da",
            data: [
              Sites[0].Salario,
              Sites[1].Salario,
              Sites[2].Salario,
              Sites[3].Salario,
              Sites[4].Salario,
            ],
          },
         
          
        ],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect,
        },
        hover: {
          mode: mode,
          intersect: intersect,
        },
        legend: {
          display: false,
        },
        scales: {
          yAxes: [
            {
              gridLines: {
                display: true,
                lineWidth: "4px",
                color: "rgba(0, 0, 0, .2)",
                zeroLineColor: "transparent",
              },
              ticks: $.extend(
                {
                  beginAtZero: true,
                  callback: function (value) {
                    if (value >= 1000) {
                      value /= 1000;
                      value += " Mil";
                    }
                    return "$" + value;
                  },
                },
                ticksStyle
              ),
            },
          ],
          xAxes: [
            {
              display: true,
              gridLines: {
                display: false,
              },
              ticks: ticksStyle,
            },
          ],
        },
      },
    });
  });
};
