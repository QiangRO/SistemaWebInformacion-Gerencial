<div class="col-lg-12">
  <?php
  if ($_SESSION["perfil"] == "Administrador") {
    include "reportes/grafico-ventas.php";
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
</div>
<div class="col-lg-12">
  <?php
  if ($_SESSION["perfil"] == "Administrador") {
    include "reportes/grafico-ventas3.php";
  }
  ?>
</div>
<div class="col-lg-12">
  <?php
  if ($_SESSION["perfil"] == "Administrador") {
    include "reportes/grafico-ventas4.php";
  }
  ?>
</div>