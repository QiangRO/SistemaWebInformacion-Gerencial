<?php
$item = null;
$valor = null;
$orden = "ventas";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

$colores = array("red", "green", "yellow", "aqua", "purple", "blue", "cyan", "magenta", "orange", "gold");

$totalVentas = ControladorProductos::ctrMostrarSumaVentas();
?>

<!--=====================================
PRODUCTOS MÁS VENDIDOS
======================================-->
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Productos más vendidos</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        <div class="chart-responsive">
          <canvas id="areaChart" height="250"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
  // -------------
  // - AREA CHART -
  // -------------
  // Get context with jQuery - using jQuery's .get() method.
  var areaChartCanvas = $('#areaChart').get(0).getContext('2d');
  var areaChart = new Chart(areaChartCanvas, {
    type: 'line',
    data: {
      labels: [
        <?php
        for ($i = 0; $i < 10; $i++) {
          echo "'" . $productos[$i]["dscripcion"] . "',";
        }
        ?>
      ],
      datasets: [{
        label: "Ventas",
        backgroundColor: "rgba(60,141,188,0.9)",
        borderColor: "rgba(60,141,188,0.8)",
        pointRadius: false,
        pointColor: "#3b8bba",
        pointStrokeColor: "rgba(60,141,188,1)",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(60,141,188,1)",
        data: [
          <?php
          for ($i = 0; $i < 10; $i++) {
            echo $productos[$i]["ventas"] . ",";
          }
          ?>
        ]
      }]
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines: {
            display: false
          }
        }],
        yAxes: [{
          gridLines: {
            display: false
          }
        }]
      }
    }
  });
  // -----------------
  // - END AREA CHART -
  // -----------------
</script>
