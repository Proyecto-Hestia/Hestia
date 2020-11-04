<?php 

	class DetallePed{ 
			private $id_det; 
			private $ped_det; 
			private $pro_det; 
			private $com_det; 
			private $ing_det; 
			private $cant_det; 
			private $est_det; 
            private $cal_det; 

		public function DetallePed(){ 
		} 

		public function getid_det(){ 
			return $this->id_det; 
		}

		public function getped_det(){ 
			return $this->ped_det; 
		} 

		public function getpro_det(){ 
			return $this->pro_det; 
		} 

		public function getcom_det(){ 
			return $this->com_det; 
		} 

		public function geting_det(){ 
			return $this->ing_det; 
		} 

		public function getcant_det(){ 
			return $this->cant_det; 
		}

		public function getest_det(){ 
			return $this->est_det; 
		} 

		public function getcal_det(){ 
			return $this->cal_det; 
		} 



		public function setid_det($valor){ 
			$this->id_det = $valor; 
		} 

		public function setped_det($valor){ 
			$this->ped_det = $valor; 
		} 

		public function setpro_det($valor){ 
			$this->pro_det = $valor; 
		} 

		public function setcom_det($valor){ 
			$this->com_det = $valor; 
		} 

		public function seting_det($valor){ 
			$this->ing_det = $valor; 
		} 

		public function setcant_det($valor){ 
			$this->cant_det = $valor; 
		}

		public function setest_det($valor){ 
			$this->est_det = $valor; 
        } 
        
        public function setcal_det($valor){ 
			$this->cal_det = $valor; 
		} 


	} 
?>
