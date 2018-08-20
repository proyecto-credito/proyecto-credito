<?php
require_once "modelos/modeloPersonas.php";
$per   = new modeloPersonas();
$datos = $per->get_personas();
