<?php 
session_start();
    
    if(isset($_SESSION["idCli"])){
        $id = $_SESSION["idCli"];
        include ("Conexion.php");
        $conexion = new Conexion();
        $sql = "SELECT id_cli FROM cliente WHERE id_cli=$id"; 
        $conexion->buscar_query($sql);
        $result = $conexion->obtenerResult();
        $filas = $result->fetch();
        $cliente= $filas['id_cli'];
        echo $cliente;
    
    }else{
        echo "";
    }

?>