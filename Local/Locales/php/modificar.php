<?php
	include("conexion.php");

	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$name = $_POST["name"];
		$tel = $_POST["tel"];
		$age = $_POST["age"];

		$sql = "SELECT * FROM estudiantes WHERE id = $id";

		if($result = $con->query($sql)){
			if($result->num_rows > 0) {
				$sql = "UPDATE estudiantes SET name='$name', telephone='$tel', age=$age WHERE id = $id";
				if($con->query($sql)){
			echo "El estudiante ha sido modificado correctamente";
		}
		else{
			echo "Actualizacion fallida";
		}
	}
	else{
		echo "La identificacion no corresponde a un estudiante";
		}
	}
	else{
		echo "Error actualizando el dato";
	}
}
?>