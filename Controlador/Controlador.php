<?php

class Controlador{
    public function abrir_pagina($url){
        require $url;
    }
    //CATEGORIAS
    public function RegistrarCategoria($frmcat_desc,$frmcat_estado){ 
        $dao = new DAOAdmin();
        $categoria = new Categoria();  
        $categoria->setfrmcat_desc($frmcat_desc); 
        $categoria->setfrmcat_estado($frmcat_estado); 
        $result = $dao->RegistrarCategoria($categoria); 
    }

    public function EditarCategoria($id){
        $dao = new DAOAdmin(); 
        $categoria = new Categoria(); 
        $categoria->setfrmcat_id($id); 
        $result = $dao->EditarCategoria($categoria); 
        $row = $result->fetch(); 
        $data = array( 'ID' => $row['id_cat'], 'DES_CAT' => $row['des_cat'], 'ESTADO' => $row['est_cat']); 
        echo json_encode($data); 
    }

    public function ActualizarCategoria($frmcat_id1,$frmcat_desc1,$frmcat_estado1){
        $dao = new DAOAdmin(); 
        $categoria = new Categoria();
        $categoria->setfrmcat_id($frmcat_id1); 
        $categoria->setfrmcat_desc($frmcat_desc1); 
        $categoria->setfrmcat_estado($frmcat_estado1);
        $result = $dao->ActualizarCategoria($categoria); 
    }

    public function EliminarCategoria($id){ 
        $dao = new DAOAdmin(); 	
        $categoria = new Categoria(); 
        $categoria->setfrmcat_id($id); 
        $result = $dao->EliminarCategoria($categoria);
    }

    //PRODUCTOS
    public function buscarCategoria(){
        $dao = new DAOAdmin();
        $result2 = $dao->buscarCategoria();
        require 'Vista/html/panel_productos.php';
    }

    public function RegistrarProducto(
        $frmnombre,
        $frmcategoria_id,
        $frmimg_pro,
        $frmdes_pro,
        $frmstock,
        $frmstockmin,
        $frmval_pro,
        $frmestado){ 
        $dao = new DAOAdmin();
        $producto = new Producto();  
        $producto->setfrmnombre($frmnombre); 
        $producto->setfrmcategoria_id($frmcategoria_id);
        $producto->setfrmimg_pro($frmimg_pro);
        $producto->setfrmdes_pro($frmdes_pro);
        $producto->setfrmstock($frmstock);
        $producto->setfrmstockmin($frmstockmin);
        $producto->setfrmval_pro($frmval_pro);
        $producto->setfrmestado($frmestado);
        $result = $dao->RegistrarProducto($producto);
    }

    public function EditarProducto($id){
        $dao = new DAOAdmin(); 
        $producto = new Producto(); 
        $producto->setfrmid($id); 
        $result = $dao->EditarProducto($producto); 
        $row = $result->fetch(); 
        $data = array( 
            'id_pro' => $row['id_pro'], 
            'nom_pro' => $row['nom_pro'], 
            'cat_id' => $row['cat_id'], 
            'img_pro' => $row['img_pro'], 
            'des_pro' => $row['des_pro'], 
            'stock' => $row['stock_pro'], 
            'stock_min' => $row['stock_min_pro'], 
            'val_pro' => $row['val_pro'], 
            'estado' => $row['est_pro'], 
        ); 
        echo json_encode($data); 
    }

    public function ActualizarProducto($frmid1,$frmnombre1,$frmcategoria_id1,$frmimg_pro1,$frmdes_pro1,$frmstock1,$frmstockmin1,$frmval_pro1,$frmestado1){
        $dao = new DAOAdmin(); 
        $producto = new Producto();
        $producto->setfrmid($frmid1); 
        $producto->setfrmnombre($frmnombre1); 
        $producto->setfrmcategoria_id($frmcategoria_id1);
        $producto->setfrmimg_pro($frmimg_pro1);
        $producto->setfrmdes_pro($frmdes_pro1);
        $producto->setfrmstock($frmstock1);
        $producto->setfrmstockmin($frmstockmin1);
        $producto->setfrmval_pro($frmval_pro1);
        $producto->setfrmestado($frmestado1);
        $result = $dao->ActualizarProducto($producto); 
    }

    public function EliminarProducto($id){ 
        $dao = new DAOAdmin(); 	
        $producto = new Producto(); 
        $producto->setfrmid($id); 
        $result = $dao->EliminarProducto($producto);
    }

    //PERSONAL

    public function Personal(){
        $dao = new DAOAdmin();
        $result = $dao->Personal();
        require "Vista/html/panel_personal.php";
    }

    public function obtenerusuarios(){
		$dao = new DAOAdmin();
		$result = $dao->obtenerusuarios();
		require ("Vista/html/obtenerUsuarios.php"); 
    }
    
    public function RegistrarPersonal($frmp_id,$frmp_nom,$frmp_ape,$frmp_fech,$frmp_genero,$frmp_eps,$frmp_pens,$frmp_arl,$frmp_correo,$frmp_tel,$frmp_dir){ 
        $dao = new DAOAdmin();
        $persona = new Personal();  
        $persona->setfrmp_id($frmp_id);
        $persona->setfrmp_nom($frmp_nom);
        $persona->setfrmp_ape($frmp_ape);
        $persona->setfrmp_fech($frmp_fech);
        $persona->setfrmp_genero($frmp_genero);
        $persona->setfrmp_eps($frmp_eps);
        $persona->setfrmp_pens($frmp_pens);
        $persona->setfrmp_arl($frmp_arl);
        $persona->setfrmp_correo($frmp_correo);
        $persona->setfrmp_tel($frmp_tel);
        $persona->setfrmp_dir($frmp_dir);
        $result = $dao->RegistrarPersonal($persona);
    }

    public function EditarPersonal($id){
        $dao = new DAOAdmin(); 
        $persona = new Personal(); 
        $persona->setfrmp_id($id); 
        $result = $dao->EditarPersonal($persona); 
        $row = $result->fetch(); 
        $data = array( 'ID' => $row['id_per'], 'Nombre' => $row['nom_per'], 'Apellido' => $row['ape_per'], 'Fecha' => $row['fecnac_per'], 'Genero' => $row['gen_per'], 'Eps' => $row['eps_per'], 'Pension' => $row['pens_per'], 'Arl' => $row['arl_per'], 'Correo' => $row['mail_per'], 'Cel' => $row['cel_per'], 'Dir' => $row['dir_per']); 
        echo json_encode($data); 
    }

    public function ActualizarPersonal($frmp_id1,$frmp_nom1,$frmp_ape1,$frmp_fech1,$frmp_genero1,$frmp_eps1,$frmp_pens1,$frmp_arl1,$frmp_correo1,$frmp_tel1,$frmp_dir1){
        $dao = new DAOAdmin(); 
        $persona = new Personal();
        $persona->setfrmp_id($frmp_id1); 
        $persona->setfrmp_nom($frmp_nom1);
        $persona->setfrmp_ape($frmp_ape1);
        $persona->setfrmp_fech($frmp_fech1);
        $persona->setfrmp_genero($frmp_genero1);
        $persona->setfrmp_eps($frmp_eps1);
        $persona->setfrmp_pens($frmp_pens1);
        $persona->setfrmp_arl($frmp_arl1);
        $persona->setfrmp_correo($frmp_correo1);
        $persona->setfrmp_tel($frmp_tel1);
        $persona->setfrmp_dir($frmp_dir1);
        $result = $dao->ActualizarPersonal($persona); 
    }

    public function EliminarPersonal($id){ 
        $dao = new DAOAdmin(); 	
        $persona = new Personal(); 
        $persona->setfrmp_id($id); 
        $result = $dao->EliminarPersonal($persona);
    }

    //MESAS

    public function RegistrarMesa($frmcap_tab,$frmestado,$frmubi){ 
        $dao = new DAOAdmin();
        $mesa = new Mesa();  
        $mesa->setfrmcap_tab($frmcap_tab);
        $mesa->setfrmestado($frmestado);
        $mesa->setfrmubi($frmubi);
        $result = $dao->RegistrarMesa($mesa); 
    }

    public function EditarMesa($id){
        $dao = new DAOAdmin();
        $mesa = new Mesa(); 
        $mesa->setfrmtab_id($id);
        $result = $dao->EditarMesa($mesa);
        $row = $result->fetch(); 
        $data = array( 
            'ID' => $row['id_mes'],
            'CAPACIDAD' => $row['cap_mes'],
            'UBICACION' => $row['ubi_mes'],
            'ESTADO' => $row['est_mes']); 
        echo json_encode($data);
    }

    public function ActualizarMesa($frmtab_id1,$frmcap_tab1,$frmubi1,$frmestado1){
        $dao = new DAOAdmin(); 
        $mesa = new Mesa();
        $mesa->setfrmtab_id($frmtab_id1); 
        $mesa->setfrmcap_tab($frmcap_tab1);
        $mesa->setfrmubi($frmubi1);
        $mesa->setfrmestado($frmestado1);
        $result = $dao->ActualizarMesa($mesa); 
    }

    public function EliminarMesa($id){ 
        $dao = new DAOAdmin(); 	
        $mesa = new Mesa(); 
        $mesa->setfrmtab_id($id); 
        $result = $dao->EliminarMesa($mesa);
    }

    //CLIENTE
    public function RegCli($idCli,$nomCli,$apeCli,$celCli,$corCli,$dirCli){ 

        $dao = new DAOcliente();
	    $cliente = new Cliente(); 
        $cliente->setid_cli($idCli);
        // $cliente->setpin_cli($pinCli); 
        $cliente->setnom_cli($nomCli); 
        $cliente->setape_cli($apeCli); 
        $cliente->setcel_cli($celCli);  
        $cliente->setmail_cli($corCli); 
        $cliente->setdir_cli($dirCli);
        $result = $dao->RegCli($cliente); 
        $_SESSION['idCli']=$idCli;
    }
    public function consultarCli($id){ 

        $dao = new DAOcliente();
        $result = $dao->consultarCli($id);
        if($result>0){
            $_SESSION['idCli']=$id;
        }
        require "Vista/html/consultarCli.php";

    }

    public function MosCat(){
        $dao = new DAOCliente();
        $result = $dao->MosCat();
        require "Vista/html/cliente.php"; 
    }
    public function MosPro($idCat){
        $dao = new DAOCliente();
        $producto = new Producto(); 
        $producto->setfrmcategoria_id($idCat); 
        $result = $dao->MosPro($producto);
        $this->ConsulStock($idCat);
        require "Vista/html/prodCli.php"; 
    }
    
 
    public function ConsulStock($idCat){
        $dao = new DAOCliente();
        $producto = new Producto(); 
        $result = $dao->ConsulStock($idCat);
        while ($filas = $result-> fetch()){
            if ($filas["stock_pro"] == 0) {
                $idproduc=$filas["id_pro"];
                $dao->Inactivarpro($idproduc);
            }
        }
    }

    public function Agregarproducto($idpro,$cant){
        $dao = new DAOCliente();
        // $result = $dao->Agregarproducto();
        $stock = $dao->Consultarstock($idpro);
        $row = $stock->fetch();
        $stockdisponible = $row['stock_pro'];
        $nuevostock = ($stockdisponible - $cant);
        $dao->Actualizarstock($nuevostock, $idpro);

    }

    public function pedido($idP,$cant,$com,$ing){ 
        $dao = new DAOCliente();
        $detalle = new DetallePed(); 
        $detalle->setpro_det($idP); 
        $detalle->setcant_det($cant);
        $detalle->setcom_det($com);
        $detalle->seting_det ($ing);  
        $result = $dao->pedido($detalle); 

    }

    public function regPed(){ 
        $dao = new DAOCliente();
        $pedido = new Pedido();  
        $_SESSION['id'] = $dao->RegPed($pedido);

    }
    public function califica($cal){ 
        $dao = new DAOCliente();
        $detalle = new DetallePed(); 
        $detalle->setcal_det($cal);   
        $result = $dao->califica($detalle); 

    }
    
    public function MostrarIngredientes($id){
        $dao = new DAOCliente();
        $producto = new Producto();
        $result = $dao->MostrarIngredientes($id);
        require "Vista/html/ingredientes.php";
      
    }
    public function car(){
        $dao = new DAOCliente();
        $result = $dao->carrito();
        require "Vista/html/car.php";
      
    }
    public function carrito(){
        $dao = new DAOCliente();
        $result = $dao->carrito();
        require "Vista/html/carrito.php";
      
    }
    public function cue(){
        $dao = new DAOCliente();
        $result = $dao->carrito();
        require "Vista/html/cuenta.php";  
    }

    public function cancelar($idet){ 
        $dao = new DAOCliente();
        $detalle = new DetallePed();   
        $result = $dao->cancelar($idet); 
    }

    public function cuenta(){ 
        $dao = new DAOCliente();
        $detalle = new Pedido();   
        $dao->cuenta(); 
        $this->factura();
    }

    public function cerrarsesion(){
        unset($_SESSION["id"]);
        unset($_SESSION["idCli"]);
        session_destroy();
        ?>
        <script>
            location.replace("index.php")
        </script>
        <?php
    }

    public function factura(){
        $dao = new DAOCliente();
        $detalle = new Pedido(); 
        $result = $dao->factura();
        $result2 = $dao->facturaCliente();
        require "Vista/html/factura.php";
    }
     
}