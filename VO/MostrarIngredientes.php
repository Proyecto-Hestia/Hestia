<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT pro_id,nom_ing,ing_id FROM productos JOIN detalle_ingredientesxproducto 
    ON productos.id_pro=detalle_ingredientesxproducto.pro_id  
    JOIN ingredientes 
    ON detalle_ingredientesxproducto.ing_id=ingredientes.id_ing WHERE cat_id='$idCat' AND productos.est_pro='ACTIVO'";
    
	$conexion->buscar_query2($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarIngrediente\" onclick=\"EditarIngrediente('.$filas['id_ing'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarIngrediente('.$filas['id_ing'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{
			"ID":"'.$filas['id_ing'].'",
			"Nombre":"'.$filas['nom_ing'].'",
            "Estado":"'.$filas['est_ing'].'",
            "Stock":"'.$filas['stock_ing'].'",
            "Valor":"'.$filas['val_ing'].'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>