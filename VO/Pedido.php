<?php 

	class Pedido{ 
			private $id_ped; 
			private $mes_id; 
			private $cli_id; 
			private $fechor_ini_ped; 
			private $fechor_fin_ped; 
			private $est_ped; 

		public function Pedido(){ 
		} 

		public function getid_ped(){ 
			return $this->id_ped; 
		}

		public function getmes_id(){ 
			return $this->mes_id; 
		} 

		public function getcli_id(){ 
			return $this->cli_id; 
		} 

		public function getfechor_ini_ped(){ 
			return $this->fechor_ini_ped; 
		} 

		public function getfechor_fin_ped(){ 
			return $this->fechor_fin_ped; 
		} 

		public function getest_ped(){ 
			return $this->est_ped; 
		}



		public function setid_ped($valor){ 
			$this->id_ped = $valor; 
		} 

		public function setmes_id($valor){ 
			$this->mes_id = $valor; 
		} 

		public function setcli_id($valor){ 
			$this->cli_id = $valor; 
		} 

		public function setfechor_ini_ped($valor){ 
			$this->fechor_ini_ped = $valor; 
		} 

		public function setfechor_fin_ped($valor){ 
			$this->fechor_fin_ped = $valor; 
		} 

		public function setest_ped($valor){ 
			$this->est_ped = $valor; 
		}


	} 
?>
