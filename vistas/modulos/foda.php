<?php
if ($_SESSION["perfil"] == "Vendedor") {
  echo '<script>
    window.location = "inicio";
  </script>';
  return;
}
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Matriz de analisis FODA
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Matriz de analisis FODA</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <div class="pull-left">
          <a class="btn btn-info" href="cuadro">
            Cuadro de Mando Integral
          </a>
        </div>
        <div style="text-align:center;">
          <a class="btn btn-info" href="index.php?ruta=comparacion&fechaInicial=2023-01-01&fechaFinal=2023-06-14">
            Comparar
          </a>
        </div>
        <div class="box-tools pull-right">
          <a class="btn btn-info" data-toggle="modal" data-target="#modalAgregarCategoria">
            Visualizar
          </a>
        </div>
      </div>
      <div class="box-body">
        <img src="vistas/img/plantilla/foda.png">
      </div>
    </div>
  </section>
</div>
<!--=====================================
MODAL AGREGAR CATEGORÍA
======================================-->
<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Visualizar progreso de los objetivos</h4>
        </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">
            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <label for="">PRIMER TRIMESTRE DEL AÑO(01-Enero-2023-- 31-Marzo-2023)</label>
                <a class="btn btn-info" href="index.php?ruta=inicio&fechaInicial=2023-01-01&fechaFinal=2023-03-31">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <label for="">SEGUNDO TRIMESTRE DEL AÑO(01-Abril-2023-- 30-Junio-2023)</label>
                <a class="btn btn-info" href="index.php?ruta=inicio&fechaInicial=2023-04-01&fechaFinal=2023-06-30">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button class="btn btn-primary">Salir</button>
        </div>
      </form>

    </div>

  </div>

</div>
<!--=====================================
MODAL EDITAR CATEGORÍA
======================================-->
<div id="modalEditarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar categoría</h4>
        </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">
            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>
                <input type="hidden" name="idCategoria" id="idCategoria" required>
              </div>
            </div>
          </div>
        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
        <?php
        $editarCategoria = new ControladorCategorias();
        $editarCategoria->ctrEditarCategoria();
        ?>
      </form>
    </div>
  </div>
</div>
<?php
$borrarCategoria = new ControladorCategorias();
$borrarCategoria->ctrBorrarCategoria();
?>