<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM pedidos JOIN detalle_pedido";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$tabla.='{
            "Id_ped":"'.$filas['id_ped'].'",
            "Id_mes":"'.$filas['mes_id'].'",
            "Id_cli":"'.$filas['cli_id'].'",
            "Id_detallePedido":"'.$filas['id_det_ped'].'",
            "Id_pro":"'.$filas['pro_id'].'",
			"Fechor_ini":"'.$filas['fechor_ini_ped'].'",
            "Fechor_fin":"'.$filas['fechor_fin_ped'].'",
            "Comentarios":"'.$filas['com_det_ped'].'",
            "Sin_ingredientes":"'.$filas['sin_ing'].'",
            "Cantidad":"'.$filas['cant'].'",
            "Estado":"'.$filas['est_ped'].'"
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>