<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM productos"; 
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();
	
	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarProducto\" onclick=\"EditarProducto('.$filas['id_pro'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarProductos('.$filas['id_pro'].')\"><i class=\"fa fa-trash\"></i></button>';
		
		$tabla.='{
			"ID":"'.$filas['id_pro'].'",
			"Nombre":"'.$filas['nom_pro'].'",
			"Categoria":"'.$filas['cat_id'].'",
			"Imagen":"'.$filas['img_pro'].'",
			"Descripcion":"'.$filas['des_pro'].'",
			"Stock":"'.$filas['stock_pro'].'",
			"Stock_minimo":"'.$filas['stock_min_pro'].'",
			"Estado":"'.$filas['est_pro'].'",
			"Valor_venta":"'.$filas['val_pro'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>