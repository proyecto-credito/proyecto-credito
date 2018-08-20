<?php

class modeloPersonas
{
    private $db;
    private $personas;

    public function __construct()
    {
        $this->db       = Conectar::conexion();
        $this->personas = array();
    }

    public function get_personas()
    {
        $consulta = $this->db->prepare("select * from personas");
        $consulta->execute();

        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->personas[] = $filas;
        }
        return $this->personas;
    }
}
