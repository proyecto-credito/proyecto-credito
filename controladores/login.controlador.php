<?php 

class ControladorLogin{
	

	static public function ctrIngresoUsuario(){

		if (isset($_POST["ingUsuario"])){
			
			if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {
				
				$tabla = "usuario";
				$item = "USUNOMBRE";
				$valor = $_POST["ingUsuario"];

				
				$respuesta = ModeloLogin::mdlMostrarUsuarios($tabla, $item, $valor);
			}

			if ($respuesta["USUNOMBRE"] == $_POST["ingUsuario"] && $respuesta["USUCONTRASENA"] == $_POST["ingPassword"]) {
				
				$_SESSION["iniciarSesion"] = "ok";
				$_SESSION["nombreUsuario"] = $respuesta["USUNOMBRE"];
				echo '<script>
					window.location = "inicio";
				</script>';
			}else{
				echo '<br><div id="alerta">Error al ingresar vuelve a intentarlo</div>';
			}
		}
	}
}

 ?>