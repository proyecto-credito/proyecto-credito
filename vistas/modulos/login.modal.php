        <!--=====================================
  MODAL LOGIN
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
	<div class="modal-dialog">
    	<div class="modal-content">
    	
    		<form method="post">
    		
<!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <div align="center">
          	<button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" align="center">

          
          	<div class="form-group">
          		<img src="vistas/img/login-monigote.png"  id="login-monigoteM" class="img-responsive">
            	<h4 class="modal-title" id="login-tituloM">Ingresar al sistema</h4>
          	</div>

            <!-- ENTRADA PARA SELECCIONAR EL MONTO-->

            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" id="ingUsuario" required>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
            </div>

          
        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer " id="login-footerM">
          <div align="center">
            <button type="submit" id="login-boton-ingresarM">Ingresar</button>
          </div>
        </div>
        <?php
		$login = new ControladorLogin();
		$login -> ctrIngresoUsuario();
		?>
		</div>
	</div>
</div>
  <!-- END DE MODAL -->