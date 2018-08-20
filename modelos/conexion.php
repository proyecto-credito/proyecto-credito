<?php
class Conexion
{
    public function conectar()
    {
        $cnx = new PDO('oci:dbname=localhost/XE', 'proyecto', 'credito12');
        $cnx->exec("SET NAMES 'utf8'");
        return $cnx;
    }
}
