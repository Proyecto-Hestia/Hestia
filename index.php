<?php 
session_start();
	require "Controlador/Controlador.php";
	require "VO/Conexion.php";
	require "VO/Categoria.php";
	require "DAO/DAOadmin.php";
	require "DAO/DAOcliente.php";
	require "VO/Productos.php";
	require "VO/Personal.php";
	require "VO/Mesas.php";
	require "VO/Cliente.php";
	require "VO/Pedido.php";
	require "VO/DetallePed.php";
	
	
	$controlador = new Controlador();


		if (isset($_GET['accion'])) { 
			switch ($_GET['accion']) { 
				//CATEGORIA
				case 'categorias': $controlador->abrir_pagina("Vista/html/panel_categoria.php");
					 break; 
				case 'RegistrarCategoria' : $controlador->RegistrarCategoria($_POST['frmcat_desc'],$_POST['frmcat_estado']);
					break;
				case 'EditarCategoria': $controlador->EditarCategoria($_POST['id']); 
					break; 
				case 'ActualizarCategoria': $controlador->ActualizarCategoria($_POST['frmcat_id1'],$_POST['frmcat_desc1'],$_POST['frmcat_estado1']);
					break; 
				case 'EliminarCategoria': $controlador->EliminarCategoria($_POST['id']);
					break;
				//PRODUCTO
				case 'productos': $controlador->buscarCategoria();
					break;
				case 'RegistrarProductos': $controlador->RegistrarProducto(
					$_POST['frmnombre'],
					$_POST['frmcategoria_id'],
					$_POST['frmimg_pro'],
					$_POST['frmdes_pro'],
					$_POST['frmstock'],
					$_POST['frmstockmin'],
					$_POST['frmval_pro'],
					$_POST['frmestado']);
					break;
				case 'EditarProducto': $controlador->EditarProducto($_POST['id']); 
					break; 
				case 'ActualizarProducto': $controlador->ActualizarProducto(
					$_POST['frmid1'],
					$_POST['frmnombre1'],
					$_POST['frmcategoria_id1'],
					$_POST['frmimg_pro1'],
					$_POST['frmdes_pro1'],
					$_POST['frmstock1'],
					$_POST['frmstockmin1'],
					$_POST['frmval_pro1'],
					$_POST['frmestado1']
				);
					break; 
				case 'EliminarProducto': $controlador->EliminarProducto($_POST['id']);
					break;
				//PERSONAL
				case 'personal': $controlador->abrir_pagina("Vista/html/panel_personal.php");
					break;
				case 'RegistrarPersonal': $controlador->RegistrarPersonal(
					$_POST['frmp_id'],
					$_POST['frmp_nom'],
					$_POST['frmp_ape'],
					$_POST['frmp_fech'],
					$_POST['frmp_genero'],
					$_POST['frmp_eps'],
					$_POST['frmp_pens'],
					$_POST['frmp_arl'],
					$_POST['frmp_correo'],
					$_POST['frmp_tel'],
					$_POST['frmp_dir']);
					break;
				case 'EditarPersonal': $controlador->EditarPersonal($_POST['id']); 
					break; 
				case 'ActualizarPersonal': $controlador->ActualizarPersonal(
					$_POST['frmp_id1'],
					$_POST['frmp_nom1'],
					$_POST['frmp_ape1'],
					$_POST['frmp_fech1'],
					$_POST['frmp_genero1'],
					$_POST['frmp_eps1'],
					$_POST['frmp_pens1'],
					$_POST['frmp_arl1'],
					$_POST['frmp_correo1'],
					$_POST['frmp_tel1'],
					$_POST['frmp_dir1']);
					break; 
				case 'EliminarPersonal': $controlador->EliminarPersonal($_POST['id']);
					break;

				//MESAS
				case 'mesas': $controlador->abrir_pagina('Vista/html/panel_mesas.php');
					 break; 
				case 'RegistrarMesa' : $controlador->RegistrarMesa($_POST['frmcap_tab'],$_POST['frmestado'],$_POST['frmubi']);
					break;
				case 'EditarMesa': $controlador->EditarMesa($_POST['id']); 
					break; 
				case 'ActualizarMesa': $controlador->ActualizarMesa(
					$_POST['frmtab_id1'],
					$_POST['frmcap_tab1'],
					$_POST['frmestado1'],
					$_POST['frmubi1']);
					break; 
				case 'EliminarMesa': $controlador->EliminarMesa($_POST['id']);
					break;
				
				//LOGIN
				case 'login': $controlador->abrir_pagina('Vista/html/login.php');
					break;
				case 'cliente': $controlador->MosCat();
					break;
				
				//COCINA
				case 'cocina': $controlador->abrir_pagina('Vista/html/panel_cocina.php');
					break;

				//CLIENTE
				case 'RegCli': $controlador->RegCli($_POST['idCli'],$_POST['nomCli'],
				$_POST['apeCli'],$_POST['celCli'],$_POST['corCli'],$_POST['dirCli']); 
					break; 
				case 'consultarCli': $controlador->consultarCli($_GET['id']); 
				    break; 
				case 'MosPro': $controlador->MosPro($_GET['idCat']); 
					break; 
				
				case 'pedido': $controlador->pedido($_POST['idP'],$_POST['cant'],$_POST['com'],$_POST['ing']); 
					break; 
				case 'califica': $controlador->califica($_POST['cal']); 
					break; 
				case 'regPed': $controlador->regPed(); 
					break; 

				case 'Agregarproducto': $controlador->Agregarproducto($_POST['idpro'],$_POST['cant']); 
					break; 
					
				case 'MostrarIngredientes': $controlador->MostrarIngredientes($_GET['id']); 
					break;
					case 'carrito': $controlador->carrito(); 
				break;	
				case 'car': $controlador->car(); 
				break;
				case 'cue': $controlador->cue(); 
					break;
				case 'cuenta': $controlador->cuenta(); 
					break;
				case 'cancelar': $controlador->cancelar($_POST['idet']); 
					break;
				case 'cerrar': $controlador->abrir_pagina("Vista/html/inicio.html");
					break; 
				case 'factura': $controlador->factura();
					break; 
				case 'cerrarcliente': $controlador->cerrarsesion();
					break;
				}

				
		}else{ 
			$controlador->abrir_pagina("Vista/html/inicio.html"); 
		}

?>
