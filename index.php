<?php
//Controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/login.controlador.php";
require_once "controladores/usuarios.controlador.php";

//Modelos

require_once "modelos/login.modelo.php";
require_once "modelos/usuarios.modelo.php";

//Ejecucion de controlador
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
