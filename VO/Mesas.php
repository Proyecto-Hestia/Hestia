<?php 
	class Mesa{ 
			private $frmtab_id; 
			private $frmcap_tab; 
            private $frmrol_id;
            private $frmubi; 

		public function Mesa(){ 
		} 
		public function getfrmtab_id(){ 
			return $this->frmtab_id; 
		}
		public function getfrmcap_tab(){ 
			return $this->frmcap_tab; 
		}
		public function getfrmestado(){ 
			return $this->frmestado; 
		} 
        public function getfrmubi(){ 
			return $this->frmubi; 
		} 
		/*SET*/ 
		public function setfrmtab_id($valor){ 
			$this->frmtab_id = $valor; 
		} 
		public function setfrmcap_tab($valor){ 
			$this->frmcap_tab = $valor; 
		}
		public function setfrmestado($valor){ 
			$this->frmestado = $valor; 
		} 
        public function setfrmubi($valor){ 
			$this->frmubi = $valor; 
		}

	} 
?>