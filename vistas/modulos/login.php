<div class="login-box" style="width: 90%;height: 20px;">
<div >
<img src="vistas/img/login-monigote.png"  id="login-monigote">
</div>
<div id="login-cuerpo">
<p id="login-titulo">INGRESAR AL SISTEMA</p>
<form method="post">
<div class="form-group has-feedback">
<input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
<span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
<div class="col-xs-7">
<button type="submit" class="btn btn-primary btn-block btn-flat" id="login-boton-ingresar">Ingresar</button>
</div>
</div>
<?php
$login = new ControladorLogin();
$login -> ctrIngresoUsuario();
?>
</form>
</div>
</div>