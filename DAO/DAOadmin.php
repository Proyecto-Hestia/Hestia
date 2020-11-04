<?php

class DAOAdmin{

    //CATEGORIA
    public function RegistrarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $frmcat_id=$categoria->getfrmcat_id(); 
        $frmcat_desc=$categoria->getfrmcat_desc(); 
        $frmcat_estado=$categoria->getfrmcat_estado(); 

        $error = 1; 
        $exito = 2; 

        if (trim($frmcat_desc) == "" OR trim($frmcat_estado) == "" ) { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO categorias VALUES (null,'$frmcat_desc','$frmcat_estado')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $id=$categoria->getfrmcat_id(); 
        $sql = "SELECT * FROM categorias WHERE id_cat = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $frmcat_id1=$categoria->getfrmcat_id(); 
        $frmcat_desc1=$categoria->getfrmcat_desc(); 
        $frmcat_estado1=$categoria->getfrmcat_estado();
        if (trim($frmcat_desc1) == "" OR trim($frmcat_estado1) == "" ) { 
            echo json_encode($error); 
        }else{
            $sql = "UPDATE categorias SET des_cat = '$frmcat_desc1', est_cat = '$frmcat_estado1' WHERE id_cat = '$frmcat_id1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
        }
    } 

    public function EliminarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $id=$categoria->getfrmcat_id(); 

        $sql = "DELETE FROM categorias WHERE id_cat = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //PRODUCTO

    public function buscarCategoria(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM categorias";
	    $conexion->buscar_query($sql);
	    $result2 = $conexion->obtenerResult();
        return $result2;
    }

    public function RegistrarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $frmid=$producto->getfrmid();
        $frmnombre=$producto->getfrmnombre(); 
        $frmcategoria_id=$producto->getfrmcategoria_id();
        $frmimg_pro=$producto->getfrmimg_pro(); 
        $frmdes_pro=$producto->getfrmdes_pro(); 
        $frmstock=$producto->getfrmstock();
        $frmstockmin=$producto->getfrmstockmin();
        $frmval_pro=$producto->getfrmval_pro();
        $frmestado=$producto->getfrmestado();
        
        $error = 1; 
        $exito = 2; 
        if (trim($frmcategoria_id) == "" OR
            trim($frmnombre) == "" OR 
            trim($frmdes_pro) == "" OR 
            trim($frmimg_pro) == "" OR 
            trim($frmstock) == "" OR 
            trim($frmstockmin) == "" OR  
            trim($frmval_pro) == "" OR
            trim($frmestado) == "") { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO productos (`id_pro`, `cat_id`, `nom_pro`, `des_pro`, `img_pro`, 
                    `stock_pro`, `stock_min_pro`, `val_pro`, `est_pro`) VALUES (null,'$frmcategoria_id',
                    '$frmnombre','$frmdes_pro','$frmimg_pro','$frmstock','$frmstockmin','$frmval_pro','$frmestado')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $id=$producto->getfrmid(); 
        $sql = "SELECT * FROM productos WHERE id_pro = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $frmid1=$producto->getfrmid(); 
        $frmnombre1=$producto->getfrmnombre(); 
        $frmcategoria_id1=$producto->getfrmcategoria_id(); 
        $frmimg_pro1=$producto->getfrmimg_pro(); 
        $frmdes_pro1=$producto->getfrmdes_pro(); 
        $frmstock1=$producto->getfrmstock();
        $frmstockmin1=$producto->getfrmstockmin();
        $frmval_pro1=$producto->getfrmval_pro(); 
        $frmestado1=$producto->getfrmestado();

        $error=1;

        if (trim($frmnombre1) == "" OR 
            trim($frmcategoria_id1) == "" OR 
            trim($frmimg_pro1) == "" OR 
            trim($frmdes_pro1) == "" OR 
            trim($frmstock1) == ""OR 
            trim($frmstockmin1) == "" OR 
            trim($frmval_pro1) == "" OR 
            trim($frmestado1) == "" ) { 
            echo json_encode($error); 
        }else{
        $sql = "UPDATE productos SET cat_id = '$frmcategoria_id1', nom_pro = '$frmnombre1', des_pro = '$frmdes_pro1', 
                img_pro ='$frmimg_pro1', stock_pro = '$frmstock1', stock_min_pro = '$frmstockmin1', val_pro = '$frmval_pro1', 
                est_pro = '$frmestado1' WHERE id_pro = '$frmid1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
        }
    } 

    public function EliminarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $id = $producto->getfrmid(); 
        $sql = "DELETE FROM productos WHERE id_pro = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //PERSONAL

    public function RegistrarPersonal(Personal $persona){ 
        $conexion = new Conexion(); 
        $frmp_id=$persona->getfrmp_id();
        $frmp_nom=$persona->getfrmp_nom();
        $frmp_ape=$persona->getfrmp_ape();
        $frmp_fech=$persona->getfrmp_fech();
        $frmp_genero=$persona->getfrmp_genero();
        $frmp_eps=$persona->getfrmp_eps();
        $frmp_pens=$persona->getfrmp_pens();
        $frmp_arl=$persona->getfrmp_arl();
        $frmp_correo=$persona->getfrmp_correo();
        $frmp_tel=$persona->getfrmp_tel();
        $frmp_dir=$persona->getfrmp_dir();
        
        $error=1;
        $exito=2;

        if (trim($frmp_id) == "" OR trim($frmp_nom) == "" OR trim($frmp_ape) == "" OR trim($frmp_fech) == "" OR trim($frmp_genero) == "" OR trim($frmp_eps) == "" OR trim($frmp_pens) == "" OR trim($frmp_arl) == "" OR trim($frmp_correo) == "" OR trim($frmp_tel) == "" OR trim($frmp_dir) == ""){ 
            echo json_encode($error); 
        }else{
        $sql = "INSERT INTO personal VALUES ($frmp_id,'$frmp_nom','$frmp_ape','$frmp_fech','$frmp_genero','$frmp_eps','$frmp_pens','$frmp_arl','$frmp_correo','$frmp_tel','$frmp_dir')"; 
        $conexion->ejecutar_query($sql); 
        echo json_encode($exito); 
        }
    }

    public function EditarPersonal(Personal $persona){ 
        $conexion = new Conexion(); 
        $id=$persona->getfrmp_id(); 
        $sql = "SELECT * FROM personal WHERE id_per = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarPersonal(Personal $persona){ 
        $conexion = new Conexion(); 
        $frmp_id1=$persona->getfrmp_id();
        $frmp_nom1=$persona->getfrmp_nom();
        $frmp_ape1=$persona->getfrmp_ape();
        $frmp_fech1=$persona->getfrmp_fech();
        $frmp_genero1=$persona->getfrmp_genero();
        $frmp_eps1=$persona->getfrmp_eps();
        $frmp_pens1=$persona->getfrmp_pens();
        $frmp_arl1=$persona->getfrmp_arl();
        $frmp_correo1=$persona->getfrmp_correo();
        $frmp_tel1=$persona->getfrmp_tel();
        $frmp_dir1=$persona->getfrmp_dir();

        $error = 1; 

        if (trim($frmp_nom1) == "" OR trim($frmp_ape1) == "" OR trim($frmp_fech1) == "" OR trim($frmp_genero1) == "" OR trim($frmp_eps1) == "" OR trim($frmp_pens1) == "" OR trim($frmp_arl1) == "" OR trim($frmp_correo1) == "" OR trim($frmp_tel1) == "" OR trim($frmp_dir1) == ""){ 
            echo json_encode($error); 
        }else{
        $sql = "UPDATE personal SET nom_per = '$frmp_nom1', ape_per = '$frmp_ape1', fecnac_per ='$frmp_fech1', gen_per = '$frmp_genero1', eps_per = '$frmp_eps1', pens_per = '$frmp_pens1', arl_per = '$frmp_arl1', mail_per = '$frmp_correo1', cel_per = '$frmp_tel1', dir_per = '$frmp_dir1' WHERE id_per = '$frmp_id1'"; 
        $conexion->buscar_query($sql);
        $result = $conexion->ObtenerFilasAfectadas();
        }
    } 

    public function EliminarPersonal(Personal $persona){ 
        $conexion = new Conexion(); 
        $id=$persona->getfrmp_id(); 
        $sql = "DELETE FROM personal WHERE id_per = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }


    //MESAS

    public function RegistrarMesa(Mesa $mesa){ 
        $conexion = new Conexion(); 
        $frmid=$mesa->getfrmtab_id();
        $frmcap_tab=$mesa->getfrmcap_tab(); 
        $frmestado=$mesa->getfrmestado(); 
        $frmubi=$mesa->getfrmubi(); 
        
        $error = 1; 
        $exito = 2; 

        if ($frmcap_tab == "" OR $frmestado == "" OR $frmubi == "") { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO mesas VALUES (null,'$frmcap_tab','$frmubi','$frmestado')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarMesa(Mesa $mesa){ 
        $conexion = new Conexion(); 
        $id=$mesa->getfrmtab_id(); 
        $sql = "SELECT * FROM mesas WHERE id_mes = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarMesa(Mesa $mesa){ 
        $conexion = new Conexion(); 
        $frmtab_id1=$mesa->getfrmtab_id(); 
        $frmcap_tab1=$mesa->getfrmcap_tab();
        $frmestado1=$mesa->getfrmestado(); 
        $frmubi1=$mesa->getfrmubi();
        $sql = "UPDATE mesas SET cap_mes = '$frmcap_tab1', ubi_mes = '$frmubi1', est_mes = '$frmestado1' WHERE id_mes = '$frmtab_id1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
    } 

    public function EliminarMesa(Mesa $mesa){ 
        $conexion = new Conexion(); 
        $id = $mesa->getfrmtab_id(); 
        $sql = "DELETE FROM mesas WHERE id_mes = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }
}    

?>