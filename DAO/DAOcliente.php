<?php 
	class DAOcliente{ 

		public function RegCli(Cliente $cliente){ 
			$conexion = new Conexion(); 
			$idCli=$cliente->getid_cli();
			// $pinCli=$cliente->getpin_cli();  
			$nomCli=$cliente->getnom_cli(); 
			$apeCli=$cliente->getape_cli(); 
			$celCli=$cliente->getcel_cli(); 
			$corCli=$cliente->getmail_cli(); 
			$dirCli=$cliente->getdir_cli(); 
			$estCli="ACTIVO";
			$error = 1; 
			$exito = 2;
			if ($idCli == "" OR $nomCli == "" OR $apeCli == "" OR $celCli == "") { 
				echo json_encode($error); 
			}else{

				$sql = "INSERT INTO cliente (id_cli,nom_cli,ape_cli,cel_cli,mail_cli,dir_cli,est_cli) 
				VALUES ('$idCli','$nomCli','$apeCli','$celCli','$corCli','$dirCli','$estCli')"; 
				$conexion->ejecutar_query($sql); 
				echo json_encode($exito);
			} 
			
		}

		public function consultarCli($id){
			$conexion = new Conexion();
			$sql = "SELECT * FROM cliente WHERE id_cli=$id";
			$conexion->buscar_query($sql);
			$result = $conexion->ObtenerFilasAfectadas();
			return $result;
		}

		public function RegPed(Pedido $pedido){ 
			
			$conexion = new Conexion(); 
			
			$idCliente=$_SESSION['idCli'];
			$mesa="1";
			$estado="En preparacion";
			date_default_timezone_set("America/Bogota"); 
			$fecIni = date("Y-m-d H:i:s"); 
			$error = 1; 
			$exito = 2;
			if ($idCliente == "") { 
				echo json_encode($error); 
			}else{

				$sql = "INSERT INTO pedidos VALUES (null,'$mesa','$idCliente','$fecIni',null,'$estado')"; 
				$conexion->ejecutar_query($sql); 
				echo json_encode($exito);
				$id = $conexion->obtenerId(); 
				return $id;
				
			} 
		}

		public function MosCat(){
			$conexion = new Conexion();
			$sql = "SELECT * FROM categorias WHERE est_cat='ACTIVO'";
			$conexion->buscar_query($sql);
			$result = $conexion->obtenerResult();
			return $result;
		}
		


		public function MosPro(Producto $producto){
			$conexion = new Conexion();
			$idCat=$producto->getfrmcategoria_id();
			$sql = "SELECT * FROM productos WHERE cat_id='$idCat' AND est_pro='ACTIVO'";
			
			$conexion->buscar_query($sql);
			$result = $conexion->obtenerResult();
			return $result;
		}

		public function Consultarstock($idpro){
			$conexion = new Conexion();
			$sql = "SELECT stock_pro FROM productos WHERE id_pro=$idpro";
			echo $sql;
			$conexion->buscar_query($sql);
			$result = $conexion->obtenerResult();
			return $result;
		}

		public function Actualizarstock($nuevostock, $idpro){
			$conexion = new Conexion();
			$sql = "UPDATE productos SET stock_pro='$nuevostock' WHERE id_pro=$idpro";
			echo $sql;
			$conexion->buscar_query($sql);
			$result = $conexion->obtenerResult();
			return $result;
		}

		public function pedido(DetallePed $detalle){ 
			
			$conexion = new Conexion(); 
			$idP=$detalle->getpro_det(); 
			$cant=$detalle->getcant_det(); 
			$com=$detalle->getcom_det();
			$ing=$detalle->geting_det();
			$ped=$_SESSION['id'];
			// $ing="arroz";
			$cal="0";
			$estado="Pedido";
			$error = 1; 
			$exito = 2;
			if ($idP == "") { 
				echo json_encode($error); 
			}else{

				$sql = "INSERT INTO detalle_pedido VALUES (null,'$ped','$idP','$com','$ing','$cant','$estado','$cal')"; 
				$conexion->ejecutar_query($sql); 
				echo json_encode($exito);
				
			} 
		}

		public function califica(DetallePed $detalle){ 
			$conexion = new Conexion(); 
			$cal=$detalle->getcal_det(); 
			$ped=$_SESSION['id'];
			$error = 1; 
			$exito = 2;
			if ($cal == "") { 
				echo json_encode($error); 
			}else{

				$sql = "UPDATE detalle_pedido SET cal_ped='$cal' WHERE ped_id=$ped"; 
				$conexion->ejecutar_query($sql); 
				echo json_encode($exito);
				
			} 
		}

		public function MostrarIngredientes($id){
			$conexion = new Conexion();
			$sql = "SELECT productos.id_pro,ingredientes.nom_ing,ingredientes.id_ing FROM productos
       			    JOIN detalle_ingredientesxproducto ON productos.id_pro=detalle_ingredientesxproducto.pro_id
       			    JOIN ingredientes ON detalle_ingredientesxproducto.ing_id=ingredientes.id_ing
					WHERE productos.id_pro=$id AND productos.est_pro='ACTIVO'";
			$conexion->buscar_query($sql);
			$result = $conexion->obtenerResult();
			return $result;		  	
		}
		
		public function ConsulStock($idCat){
			$conexion = new Conexion();
			$sql = "SELECT id_pro,stock_pro FROM productos WHERE cat_id=$idCat";
			$conexion->buscar_query($sql);
			$result = $conexion->obtenerResult();
			return $result;
		}
		
		public function Inactivarpro($idPro){
			$conexion = new Conexion();
			$sql = "UPDATE productos SET est_pro='INACTIVO' WHERE id_pro=$idPro";
			$conexion->buscar_query($sql);
		}

		public function cancelar($idet){ 
			$conexion = new Conexion(); 
				$sql = "UPDATE detalle_pedido SET est_det_ped='Cancelado' WHERE id_det_ped=$idet" ; 
				$conexion->ejecutar_query($sql); 
				
		}

		public function cuenta(){ 
			$conexion = new Conexion(); 
			$ped=$_SESSION['id'];
				$sql = "UPDATE pedidos SET est_ped='Cuenta solicitada' WHERE id_ped=$ped" ; 
				$conexion->ejecutar_query($sql);
		}

		public function carrito(){
			$conexion = new Conexion();
			
			if(isset($_SESSION['id'])) {
				$ped=$_SESSION['id'];
				$sql = "SELECT * FROM productos JOIN detalle_pedido ON productos.id_pro=detalle_pedido.pro_id 
				WHERE detalle_pedido.ped_id=$ped AND detalle_pedido.est_det_ped!='Cancelado'";
				$conexion->buscar_query($sql);
				$result = $conexion->obtenerResult();
				return $result;	
			}
				  	
		}

		public function factura(){
			$conexion = new Conexion();
			$ped=$_SESSION['id']; 
			$sql = "SELECT * FROM pedidos JOIN detalle_pedido ON pedidos.id_ped=detalle_pedido.ped_id 
			JOIN productos ON productos.id_pro=detalle_pedido.pro_id JOIN cliente ON cliente.id_cli=pedidos.cli_id WHERE id_ped=$ped";
			$conexion->buscar_query($sql);
			$result = $conexion->obtenerResult();
			return $result;
		}

		public function facturaCliente(){
			$conexion = new Conexion();
			$ped=$_SESSION['id']; 
			$sql = "SELECT * FROM pedidos JOIN detalle_pedido ON pedidos.id_ped=detalle_pedido.ped_id 
			JOIN productos ON productos.id_pro=detalle_pedido.pro_id JOIN cliente ON cliente.id_cli=pedidos.cli_id WHERE id_ped=$ped";
			$conexion->buscar_query($sql);
			$result2 = $conexion->obtenerResult();
			return $result2;
		}
	}
	
?>
	