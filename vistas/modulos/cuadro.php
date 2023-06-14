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
      Cuadro de mando Integral
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Cuadro de mando Integral</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <div class="input-group">
          <a class="btn btn-info" href="foda">
            Matriz de Analisis FODA
          </a>
        </div>
        <div class="box-tools pull-right">
          <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
            Agregar producto
          </button> -->
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive" width="100%">
          <thead style="background-color: #1F497D; color:white">
            <tr>
              <th>Problematica</th>
              <th>Perspectiva</th>
              <th>Objetivo General</th>
              <th>Objetivo Estratégico</th>
              <th>KPI</th>
              <th>Peligro(Rojo)</th>
              <th>Precaucion(Amarillo)</th>
              <th>Meta(Verde)</th>
              <th>Valor Actual</th>
              <th>Inductor</th>
              <th>Plan de Acción</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody style="vertical-align:middle;">
            <tr>
              <td style="vertical-align:middle;" rowspan="8">¿Cómo puede la empresa de lácteos PIL Bolivia mejorar la calidad de su producto de manera sostenible y rentable, al mismo tiempo que garantize la satisfacción del cliente y optimiza sus procesos internos y financieros, en vista de la disminución en la calidad del producto que ha afectado la productividad sostenible de la empresa, aumentando sus costos de producción y generando una mayor cantidad de desperdicios y retrabajos?</td>
              <td>Finanzas</td>
              <td>Incrementar la participación en el mercado y mejorar la eficiencia operativa</td>
              <td>Incrementar la participación en el mercado y mejorar la eficiencia operativa</td>
              <td>Costo unitario de producción</td>
              <td style="background-color: red; color:white; vertical-align:middle; text-align:center">482,84 BOB.</td>
              <td style="background-color: yellow; vertical-align:middle; text-align:center">482,84 BOB.</td>
              <td style="background-color: green; color:black; vertical-align:middle; text-align:center">482,84 BOB.</td>
              <td style="background-color: grey; color:black; vertical-align:middle; text-align:center">379,37 BOB</td>
              <td>Mejora en la gestión de inventarios y optimización de la cadena de suministro</td>
              <td>Implementación de un sistema de gestión de inventarios y adopción de tecnologías para la optimización de la cadena de suministro</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-info" href="inicio">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td rowspan="2" style="vertical-align:middle;">Clientes</td>
              <td style="vertical-align:middle;" rowspan="2">Asegurar la satisfacción y lealtad de los clientes mediante la entrega de productos de alta calidad y el establecimiento de una comunicación efectiva con ellos.</td>
              <td>Optimizar la calidad de los productos y servicios ofrecidos</td>
              <td>Tasa de satisfacción del cliente</td>
              <td style="background-color: red; color:white; vertical-align:middle; text-align:center">Tasa de satisfacción del cliente inferior al 70%.</td>
              <td style="background-color: yellow; vertical-align:middle; text-align:center">Tasa de satisfacción del cliente entre el 70% y el 80%.</td>
              <td style="background-color: green; color:black; vertical-align:middle; text-align:center">Tasa de satisfacción del cliente superior al 80%.</td>
              <td style="background-color: grey; color:black; vertical-align:middle; text-align:center">Tasa de satisfacción del cliente del 85%.</td>
              <td>Porcentaje de productos defectuosos identificados en el proceso de producción.</td>
              <td>Implementar un sistema de control de calidad más riguroso en el proceso de producción. Capacitar al personal de producción y de control de calidad. Establecer un sistema de retroalimentación de los clientes para mejorar la calidad de los productos</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-info" href="inicio">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td>Optimizar la atención al cliente</td>
              <td>Tiempo Promedio que Toma para Responder a las Preguntas o Quejas de los Clientes</td>
              <td style="background-color: red; color:white; vertical-align:middle; text-align:center">3 días</td>
              <td style="background-color: yellow; vertical-align:middle; text-align:center">2-3 días</td>
              <td style="background-color: green; color:black; vertical-align:middle; text-align:center">menor a 2 días</td>
              <td style="background-color: grey; color:black; vertical-align:middle; text-align:center">1 día</td>
              <td>Entrenamiento al Personal de Servicio al Cliente</td>
              <td>Implementar un Sistema de Tickets de Soporte</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-info" href="inicio">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td style="vertical-align:middle;" rowspan="4">Aprendizaje</td>
              <td rowspan="2">Mejorar las capacidades y conocimientos de la empresa para el desarrollo de medios para el desarrollo sostenible y el cumplimiento de los objetivos empresariales</td>
              <td>Mejorar la eficiencia operativa</td>
              <td>Porcentaje de cumplimiento del plan de capacitación</td>
              <td style="background-color: red; color:white; vertical-align:middle; text-align:center">40%</td>
              <td style="background-color: yellow; vertical-align:middle; text-align:center">60%</td>
              <td style="background-color: green; color:black; vertical-align:middle; text-align:center">80%</td>
              <td style="background-color: grey; color:black; vertical-align:middle; text-align:center">75%</td>
              <td>Resultado de Evaluaciones de capacitacion</td>
              <td>Mejorar los actuales planes de capacitacion para elevar al personal a los niveles de capacitacion y exelencia deseados. Evaluar continuamente el crecimiento y desarrollo de competencias en el personal</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-info" href="inicio">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td>Inversión en investigaciones y desarrollo</td>
              <td>Residuo industrial producido en toneladas</td>
              <td style="background-color: red; color:white; vertical-align:middle; text-align:center">13500t</td>
              <td style="background-color: yellow; vertical-align:middle; text-align:center">9500t</td>
              <td style="background-color: green; color:black; vertical-align:middle; text-align:center">6500t</td>
              <td style="background-color: grey; color:black; vertical-align:middle; text-align:center">9000kg</td>
              <td>Porcentaje de materiales y subproductos reciclados</td>
              <td>Investigar nuevos metodos rentables para reciclar residuos resultantes de la produccion de productos lacteos.</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-info" href="inicio">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td rowspan="2">Mejora en investigaciones y desarrollo</td>
              <td>Identificar nuevas tecnologías y metodologías para mejorar la calidad del producto</td>
              <td>Incremento en la calidad del producto</td>
              <td rowspan="2" style="background-color: red; color:white; vertical-align:middle; text-align:center">3 proyectos</td>
              <td rowspan="2" style="background-color: yellow; vertical-align:middle; text-align:center">4 proyectos</td>
              <td rowspan="2" style="background-color: green; color:black; vertical-align:middle; text-align:center">5 proyectos</td>
              <td rowspan="2" style="background-color: grey; color:black; vertical-align:middle; text-align:center">Productos lanzados</td>
              <td>Desarrollo de nuevos prototipos</td>
              <td>Contratar a un equipo especializado en investigación y desarrollo para identificar nuevas tecnologías y metodologías para mejorar la calidad del producto</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-info" href="inicio">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td>Incrementar la inversión en investigación y desarrollo</td>
              <td>Número de patentes registradas</td>
              <td>Porcentaje de productos lanzados exitosamente</td>
              <td>Aumentar la inversión en investigación y desarrollo para financiar la creación de nuevos productos y mejorar los procesos internos.</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-info" href="inicio">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
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
          <div class="box-body">
            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group">
              <img src="vistas/img/plantilla/foda.png" width="600" height="400">
            </div>
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