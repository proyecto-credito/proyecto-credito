<?php 
require_once "modelos/conexion.php";


class ModeloLogin{
	
	static public function mdlMostrarUsuarios($tabla, $item, $valor){
		if ($item != null) {
			$consulta = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$consulta->bindParam(":".$item, $valor, PDO::PARAM_STR);
			$consulta->execute();
			return $consulta->fetch();
		}else{
			$consulta = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$consulta->execute();
			return $consulta->fetchAll();
		}

		$consulta->close();
		$consulta = null;
	}
}

 ?>