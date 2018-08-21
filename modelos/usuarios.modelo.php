<?php 
require_once "modelos/conexion.php";


class ModeloSucursal{

	public function mdlMostrarSucursal($tabla){

		$conn = Conexion::conectarOci();     	
		$curs = oci_new_cursor($conn);		
		$stid = oci_parse($conn, "begin PKG_USUARIO.consultar_usuario(:cursor); end;");			
		oci_bind_by_name($stid, ":cursor", $curs, -1, OCI_B_CURSOR);		
		oci_execute($stid);
		oci_execute($curs);
		oci_fetch_all($curs,$res,null,null,OCI_FETCHSTATEMENT_BY_ROW);		
		return $res;
	}
	
}

 ?>