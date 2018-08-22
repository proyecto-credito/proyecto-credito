<?php 
//Se valida el rol del usuario y se le asigna el menu correspondiente a ese rol
if (isset($_SESSION["rolUsuario"])) {
	if ($_SESSION["rolUsuario"] == "Administrador") {
		echo '<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu">
					<li class="disable">
						<a href="contenido">
						<i class="fa fa-home"></i>
						<span>Inicio</span>
						</a>
					</li>
					<li class="disable">
						<a href="frmPrevalidador">
						<i class="fa fa-pencil-square-o"></i>
						<span>Prevalidador</span>
						</a>
					</li>
					<li class="disable">
						<a href="usuarios">
						<i class="fa fa-user"></i>
						<span>Usuarios</span>
						</a>
					</li>
				</ul>
			</section>
		</aside>';
	}else if ($_SESSION["rolUsuario"] == "Analista") {
		echo '<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu">
					<li class="disable">
					<a href="contenido">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
					</a>
					</li>
				</ul>
			</section>
		</aside>';
	}
}else{
	echo '
		<ul class="sidebar-menu" id="menuISidebarUl">
			<li class="disable"  id="menuISidebarLi">
				<a href="inicio" id="menuIA">
				<i class="fa fa-home"></i>
				<span>Inicio</span>
				</a>
			</li>
			<li class="disable" id="menuISidebarLi">
				<a href="contenido" id="menuIA">
				<i class="fa fa-area-chart"></i>
				<span>Simulador de credito</span>
				</a>
			</li>
			<li class="disable" id="menuISidebarLi">
				<a href="contenido" id="menuIA">
				<i class="fa fa-check"></i>
				<span>Credito</span>
				</a>
			</li>
			<li class="disable" id="menuISidebarLi">
				<a href="contenido" id="menuIA">
				<i class="fa fa-info-circle"></i>
				<span>Información</span>
				</a>
			</li>
			<li class="disable" id="menuISidebarLi">
				<a href="contenido" id="menuIA">
				<i class="fa fa-bank"></i>
				<span>Oficinas</span>
				</a>
			</li>
			<li class="disable" id="menuISidebarLi">
				<a href="#"  id="menuIA" data-toggle="modal" data-target="#modalAgregarUsuario">
				<i class="fa fa-user"></i>
				<span>Login</span>
				</a>
			</li>
			<li class="disable">
				<div class="user-panel">
        			<div class="pull-left image">
          				<img src="vistas/img/login-monigote.png" class="img-responsive" alt="User Image">
        			</div>
        			<div class="pull-left info">
          				<h3 id="menuILP">Ingresar al sistema</h3>
        			</div>
      			</div>
      			<div align="center">
        			<form method="post" class="sidebar-form" >
        			<div class="input-group" >
          				<input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" id="menuILI" required>
          				<span class="glyphicon glyphicon-user form-control-feedback"></span>
          			</div>
        			<div class="input-group">
          				<input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
          				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
          			</div>
          			<div class="input-group">
          				<span class="input-group">
                			<button type="submit" class="btn btn-primary btn-block btn-flat" id="menuILB">Ingresar
                			</button>
              			</span>
        			</div>
        			';
        			$login = new ControladorLogin();
					$login -> ctrIngresoUsuario();
        			echo '
      			</form>
      			</div>
			</li>
		</ul>
	';
}
?>