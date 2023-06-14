<?php
if ($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor") {
  echo '<script>
    window.location = "inicio";
  </script>';
  return;
}
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Reporte Gerencial
      <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Reporte Gerencial</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <div class="input-group">
          <button type="button" class="btn btn-default" id="daterange-btn2">
            <span>
              <i class="fa fa-calendar"></i>
              <?php
              if (isset($_GET["fechaInicial"])) {
                echo $_GET["fechaInicial"] . " - " . $_GET["fechaFinal"];
              } else {
                echo 'Rango de fecha';
              }
              ?>
            </span>
            <i class="fa fa-caret-down"></i>
          </button>
        </div>
        <div class="box-tools pull-right">
          <?php
          if (isset($_GET["fechaInicial"])) {
            echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte&fechaInicial=' . $_GET["fechaInicial"] . '&fechaFinal=' . $_GET["fechaFinal"] . '">';
          } else {
            echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte">';
          }
          ?>
          <!-- <button class="btn btn-success" style="margin-top:5px">Descargar reporte en Excel</button> -->
        </div>
      </div>
      <div class="box-body">
        <div class="">
          <!-- <div class="row">
            <?php
            if ($_SESSION["perfil"] == "Administrador") {
              include "inicio/cajas-superiores.php";
            }
            ?>
          </div> -->
          <div class="row">
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/grafico-ventas.php";
              }
              ?>
            </div>
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/grafico-ventas2.php";
              }
              ?>
            </div>
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/grafico-ventas3.php";
              }
              ?>
            </div>
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/grafico-ventas4.php";
              }
              ?>
            </div>
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/productos-datos.php";
              }
              ?>
            </div>
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/productos-mas-vendidos.php";
              }
              ?>
            </div>
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/productos-mas-vendidos2.php";
              }
              ?>
            </div>
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/productos-mas-vendidos3.php";
              }
              ?>
            </div>
            <div class="col-lg-6">
              <?php
              if ($_SESSION["perfil"] == "Administrador") {
                include "reportes/productos-mas-vendidos4.php";
              }
              ?>
            </div>
            <!-- <div class="col-lg-6">
        <?php
        if ($_SESSION["perfil"] == "Administrador") {
          include "inicio/productos-recientes.php";
        }
        ?>
      </div> -->
            <div class="col-lg-12">
              <?php
              if ($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor") {
                echo '<div class="box box-success">
            <div class="box-header">
            <h1>Bienvenid@ ' . $_SESSION["nombre"] . '</h1>
            </div>
            </div>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>