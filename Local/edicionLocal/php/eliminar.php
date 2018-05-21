<?php
	include("conexion.php");

	if(isset($_POST["id"])){
		$id = $_POST["id"];

		$sql = "DELETE FROM ejemplo_ajax.estudiantes WHERE estudiantes.id = $id";

		if ($con->query($sql) === TRUE) {
    		echo "El estudiante fue eliminado correctamente";
			} else {
    			echo "No se ha podido eliminar el estudiante";
		}

	}
?>