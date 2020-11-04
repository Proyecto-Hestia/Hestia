<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM mesas";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarMesa\" onclick=\"EditarMesa('.$filas['id_mes'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarMesa('.$filas['id_mes'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{
			"ID":"'.$filas['id_mes'].'",
			"Capacidad":"'.$filas['cap_mes']." Personas".'",
            "Ubicacion":"'.$filas['ubi_mes'].'",
			"Estado":"'.$filas['est_mes'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>