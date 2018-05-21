<?php
	include("php/conexion.php");

	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$nombre = $_POST["nombre"];
		$direccion = $_POST["direccion"];
		$capcidad = $_POST["capacidad"];

		$sql = "INSERT INTO `projevents`.`local` (`id`, `nombre`, `direccion`, `capacidad`) VALUES ($id, '$nombre', '$direccion', $capcidad)";

		if ($con->query($sql) === TRUE) {
    		echo "El local fue agregado correctamente";
			} else {
    			echo "No se ha podido agregar el local ";
		}

	}
?>