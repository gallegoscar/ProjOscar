<?php
	include("conexion.php");

		$sql = "SELECT * FROM estudiantes";

		if($result = $con->query($sql)){
			$resultado = mysqli_query($con, $sql);
			while ($fila =  mysqli_fetch_array($resultado)) {
				echo '<li>'.$fila['id'].' : '.$fila['name'].' '.$fila['telephone'].' '.$fila['age'].'</li>';
			}
		}
?>