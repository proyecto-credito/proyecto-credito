<?php 
class ControladorSucursal
{
	
	public function ctrSucursal(){
		$tabla = "usuario";
		$respuesta = ModeloSucursal::mdlMostrarSucursal($tabla);
		return $respuesta;
	}
}

 ?>