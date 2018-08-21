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
			//Se valida el nombre de usuario
			if ($respuesta["USUNOMBRE"] == $_POST["ingUsuario"]) {
				//Se valida la contraseña del usuario
				if ($respuesta["USUCONTRASENA"] == $_POST["ingPassword"]) {
					//Se valida el estado del usuario
					if ($respuesta["USUESTADO"] == "Activo") {
						//Se crean las respectivas sesiones
						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["nombreUsuario"] = $respuesta["USUNOMBRE"];
						$_SESSION["rolUsuario"] = $respuesta["ROLNOMBRE"];
						//redirecciona a la pagina de inicio
						echo '<script>
						window.location = "inicio";
						</script>';
					}else if ($respuesta["USUESTADO"] == "Inactivo") {
						//Mensaje de error
						echo '<br><div id="alerta" align="center">Error al ingresar, usted no se encuentra activo en nuestro sistema, para mas información debe acercarse a la oficina más cercana.</div>';
					}
				}else{
					//Se deja el valor del campo de texto usuario enviado por el formulario.
					echo '<script>
						$(document).ready(
                		function(){     
                			$("#ingUsuario").val("'.$_POST["ingUsuario"].'"); 
            			});
					</script>';
					//Se muestra un mensaje de error
					echo '<br><div id="alerta" align="center">Error al ingresar la contraseña vuelva a intentarlo</div>';
				}
			}else if ($respuesta["USUNOMBRE"] != $_POST["ingUsuario"] && $respuesta["USUCONTRASENA"] != $_POST["ingPassword"]) {
				//mensaje de error
				echo '<br><div id="alerta" align="center">Error al ingresar el usuario y la contraseña vuelva a intentarlo</div>';
			}
		}
	}
}
?>