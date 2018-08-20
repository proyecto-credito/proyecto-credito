<?php 
require_once "modelos/conexion.php";


class ModeloSucursal{

	public function mdlMostrarSucursal($tabla){
		$consulta = Conexion::conectar()->prepare("select * from $tabla ");
		$consulta->execute();
		return $consulta->fetchAll();
	}
	
}

 ?>