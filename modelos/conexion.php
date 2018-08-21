<?php
class Conexion
{
    public function conectar()
    {
        $cnx = new PDO('oci:dbname=localhost/XE', 'proyecto', 'credito12');
        $cnx->exec("SET NAMES 'utf8'");
        return $cnx;
    }
    public function conectarOci()
    {
        $conn = oci_connect('proyecto', 'credito12', 'localhost/XE');
		if (!$conn) {
    	$e = oci_error();
    	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		return $conn;
    }
}
?>