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
<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Productos más vendidos</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        <div class="chart-responsive">
          <canvas id="barChart" height="270"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // -------------
  // - BAR CHART -
  // -------------
  var barChartCanvas = $('#barChart').get(0).getContext('2d');
  var barChart = new Chart(barChartCanvas, {
    type: 'bar',
    data: {
      labels: [
        <?php
        for ($i = 0; $i < 10; $i++) {
          echo "'" . $productos[$i]["decripcion"] . "', ";
        }
        ?>
      ],
      datasets: [{
        label: 'Ventas',
        data: [
          <?php
          for ($i = 0; $i < 10; $i++) {
            echo $productos[$i]["ventas"] . ", ";
          }
          ?>
        ],
        backgroundColor: [
          <?php
          for ($i = 0; $i < 10; $i++) {
            echo "'" . $colores[$i] . "', ";
          }
          ?>
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            precision: 0
          }
        }
      }
    }
  });
  // -----------------
  // - END BAR CHART -
  // -----------------
</script>
