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
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Productos más vendidos</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        <div class="chart-responsive">
          <canvas id="lineChart" height="250"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // -------------
  // - LINE CHART -
  // -------------
  // Get context with jQuery - using jQuery's .get() method.
  var lineChartCanvas = document.getElementById('lineChart').getContext('2d');
  var lineChart = new Chart(lineChartCanvas, {
    type: 'line',
    data: {
      labels: [
        <?php
        for ($i = 0; $i < 10; $i++) {
          echo "'" . $productos[$i]["escripcion"] . "',";
        }
        ?>
      ],
      datasets: [{
  label: "Ventas",
  borderColor: "rgba(60,141,188,0.9)",
  backgroundColor: [
    <?php
    for ($i = 0; $i < 10; $i++) {
      echo "'" . $colores[$i % count($colores)] . "',";
    }
    ?>
  ],
  pointBorderColor: "#fff",
  pointBackgroundColor: [
    <?php
    for ($i = 0; $i < 10; $i++) {
      echo "'" . $colores[$i % count($colores)] . "',";
    }
    ?>
  ],
  pointBorderWidth: 1,
  pointRadius: 4,
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
      responsive: true,
      maintainAspectRatio: false,
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
            display: true,
            color: "#f0f0f0"
          },
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  // -----------------
  // - END LINE CHART -
  // -----------------
</script>
