<?php 

	class Conexion{ 
		private static $host = "localhost"; 
		private static $user = "root"; 
		private static $password = ""; 
		protected $name = "hestia";
		private $conn; 
		private $sql2;
		public $resultado; 
		public $resultado2; 
		public $filas; 
		public $filas2;
		public $Id;

		private function abrir_conexion(){ 
			$this->conn = new PDO ("mysql:host=".self::$host.";dbname=".$this->name."",self::$user,self::$password); 
		} 

		private function cerrar_conexion(){ 
			$this->conn= null; 
		}

		public function ejecutar_query($sql){ 
			$this->abrir_conexion(); 
			$resultado = $this->conn->exec($sql); 
			print_r($this->conn->errorInfo()); 
			$this->Id=$this->conn->lastInsertId(); 
			$this->cerrar_conexion(); 
		} 

		public function buscar_query($sql){ 
			$this->abrir_conexion(); 
			//$this->sql2=$this->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$this->resultado=$this->conn->query($sql); 
			//print_r($this->conn->errorInfo()); 
			$this->filas=$this->resultado->rowCount(); 
			$this->cerrar_conexion(); 
		} 

		public function buscar_query2($sql){ 
			$this->abrir_conexion();
			 
			$this->resultado=$this->conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$this->resultado->execute(); 
			//print_r($this->conn->errorInfo()); 
			$this->filas2=$this->resultado->rowCount(); 
			$this->cerrar_conexion(); 
		} 

		public function obtenerResult(){ 
			return $this->resultado; 
		} 

		public function obtenerResult2(){ 
			return $this->resultado2; 
		}

		public function ObtenerFilasAfectadas(){ 
			return $this->filas; 
		} 

		public function obtenerId(){ 
			return $this->Id; 
		} 
	}
?>