<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM personal"; 
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();
	
	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarPersonal\" onclick=\"EditarPersonal('.$filas['id_per'].',2)\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarPersonal('.$filas['id_per'].')\"><i class=\"fa fa-trash\"></i></button>';
		
		$tabla.='{
			"ID":"'.$filas['id_per'].'",
			"Nombre":"'.$filas['nom_per'].'",
			"Apellido":"'.$filas['ape_per'].'",
			"Fecha":"'.$filas['fecnac_per'].'",
			"Genero":"'.$filas['gen_per'].'",
			"Eps":"'.$filas['eps_per'].'",
			"Pension":"'.$filas['pens_per'].'",
			"Arl":"'.$filas['arl_per'].'",
			"Correo":"'.$filas['mail_per'].'",
			"Cel":"'.$filas['cel_per'].'",
			"Dir":"'.$filas['dir_per'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';
?>