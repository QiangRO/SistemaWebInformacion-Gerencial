<div class="col-lg-12">
  <?php
  if ($_SESSION["perfil"] == "Administrador") {
    include "reportes/grafico-ventas-antes.php";
  }
  ?>
</div>
<div class="col-lg-12">
  <?php
  if ($_SESSION["perfil"] == "Administrador") {
    include "reportes/grafico-ventas2-antes.php";
  }
  ?>
</div>
<div class="col-lg-12">
  <?php
  if ($_SESSION["perfil"] == "Administrador") {
    include "reportes/grafico-ventas2.php";
  }
  ?>
</div>