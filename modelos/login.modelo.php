<?php 
require_once "modelos/conexion.php";

class ModeloLogin{
	
	static public function mdlMostrarUsuarios($tabla, $item, $valor){
		if ($item != null and $valor != null) {
			$consulta = Conexion::conectar()->prepare("SELECT * FROM $tabla t
				inner join PERSONA p on(t.USUCODIGO = p.USUARIO_USUCODIGO)
				inner join ROLES r on(p.ROLES_ROLCODIGO = r.ROLCODIGO) WHERE $item = :$item");
			$consulta->bindParam(":".$item, $valor, PDO::PARAM_STR);
			$consulta->execute();
			return $consulta->fetch();
		}
		$consulta->close();
		$consulta = null;
	}
}
?>