<?php
	include("conexion.php");

	if(isset($_POST["id"])){
		$id = $_POST["id"];

		$sql = "SELECT * FROM estudiantes WHERE id = $id";

		if($result = $con->query($sql)){
			$resultado = mysqli_query($con, $sql);
			if ($fila =  mysqli_fetch_array($resultado)) {
				echo '<li>'.$fila['id'].' : '.$fila['name'].' '.$fila['telephone'].' '.$fila['age'].'</li>';
			}
			else{
				echo "No se ha podido obtener a el estudiante";
			}
		}
	}
?>