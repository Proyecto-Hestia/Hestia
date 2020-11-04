<?php 
	class Categoria{ 
			private $frmcat_id; 
			private $frmcat_desc; 
			private $frmcat_estado; 

		public function Categoria(){ 
		} 
		public function getfrmcat_id(){ 
			return $this->frmcat_id; 
		}
		public function getfrmcat_desc(){ 
			return $this->frmcat_desc; 
		} 
		public function getfrmcat_estado(){ 
			return $this->frmcat_estado; 
		} 
		/*SET*/ 
		public function setfrmcat_id($valor){ 
			$this->frmcat_id = $valor; 
		} 
		public function setfrmcat_desc($valor){ 
			$this->frmcat_desc = $valor; 
		} 
		public function setfrmcat_estado($valor){ 
			$this->frmcat_estado = $valor; 
		} 

	} 
?>