        <!--=====================================
  MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarSucursal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <div align="center">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Simular crédito</h4>
          </div>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          <div class="box-body">

            <!-- ENTRADA PARA SELECCIONAR EL MONTO-->

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <select class="form-control input-lg" name="simMonto">
                  <option value="">Selecionar Monto</option>
                  <option value="">0 - 1000000</option>
                  <option value="">1000001 - 3000000</option>
                  <option value="">3000001 - 5000000</option>
                  <option value="">5000001 - 1000000</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA SELECCIONAR LA CANTIDAD DE CUOTAS -->

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-database"></i></span>
                <select class="form-control input-lg" name="simCuotas">
                  <option value="">Selecionar Número de Cuotas</option>
                    <?php 
                        for ($i=1; $i <25 ; $i++) {                           
                          echo '<option>'.$i.'</option>';
                        }
                    ?>
                  </select>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
          <div align="center">
            <button type="submit" class="btn btn-primary">Iniciar</button>
          </div>
        </div>

        <?php

  //      $crearSucursal = new ControladorSucursal();
//        $crearSucursal->ctrCrearSucursal();

        ?>
      </form>
      </div>

  </div>
</div>
  <!-- END DE MODAL -->