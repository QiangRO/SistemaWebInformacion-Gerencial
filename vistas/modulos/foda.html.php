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
      <div class="box-header with-border box-tools pull-right">
        <a class="btn btn-info" href="categorias">
          Cuadro de Mando
        </a>
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
      <form role="form" method="post">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#1F497D; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">MATRIZ FODA</h4>
        </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">

          <!-- ENTRADA PARA EL NOMBRE -->
          <div class="form-group">
            <img src="vistas/img/plantilla/foda.png" width="600" height="400">
          </div>

        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button class="btn btn-primary">Guardar </button>
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