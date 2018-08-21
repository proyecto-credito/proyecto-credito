<?php 
//Se valida el rol del usuario y se le asigna el menu correspondiente a ese rol
if ($_SESSION["rolUsuario"] == "Administrador") {
	echo '<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu">
			<li class="disable"><a href="contenido">
				<i class="fa fa-home"></i>
				<span>Inicio</span>
			</a>
		</li>
		<li class="disable"><a href="frmPrevalidador">
				<i class="fa fa-pencil-square-o"></i>
				<span>Prevalidador</span>
			</a>
		</li>
		<li class="disable"><a href="usuarios">
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
			<li class="disable"><a href="contenido">
				<i class="fa fa-home"></i>
				<span>Inicio</span>
			</a>
		</li>
		</ul>
	</section>
</aside>';
}
?>