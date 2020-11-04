<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM categorias";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarCategoria\" onclick=\"EditarCategoria('.$filas['id_cat'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarCategoria('.$filas['id_cat'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{
			"ID":"'.$filas['id_cat'].'",
			"Descripcion":"'.$filas['des_cat'].'",
			"Estado":"'.$filas['est_cat'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>