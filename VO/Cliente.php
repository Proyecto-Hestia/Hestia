<?php 

	class Cliente{ 
			private $id_cli; 
			private $pin_cli; 
			private $nom_cli; 
			private $ape_cli; 
			private $tel_cli; 
			private $cel_cli; 
			private $mail_cli; 
			private $dir_cli; 
            private $est_cli; 

		public function Cliente(){ 
		} 

		public function getid_cli(){ 
			return $this->id_cli; 
		}

		public function getpin_cli(){ 
			return $this->pin_cli; 
		}

		public function getnom_cli(){ 
			return $this->nom_cli; 
		} 

		public function getape_cli(){ 
			return $this->ape_cli; 
		} 

		public function gettel_cli(){ 
			return $this->tel_cli; 
		} 

		public function getcel_cli(){ 
			return $this->cel_cli; 
		} 

		public function getmail_cli(){ 
			return $this->mail_cli; 
		}

		public function getdir_cli(){ 
			return $this->dir_cli; 
		} 

		public function getest_cli(){ 
			return $this->est_cli; 
		} 



		public function setid_cli($valor){ 
			$this->id_cli = $valor; 
		} 

		public function setpin_cli($valor){ 
			$this->pin_cli = $valor; 
		} 

		public function setnom_cli($valor){ 
			$this->nom_cli = $valor; 
		} 

		public function setape_cli($valor){ 
			$this->ape_cli = $valor; 
		} 

		public function settel_cli($valor){ 
			$this->tel_cli = $valor; 
		} 

		public function setcel_cli($valor){ 
			$this->cel_cli = $valor; 
		} 

		public function setmail_cli($valor){ 
			$this->mail_cli = $valor; 
		}

		public function setdir_cli($valor){ 
			$this->dir_cli = $valor; 
        } 
        
        public function setest_cli($valor){ 
			$this->est_cli = $valor; 
		} 


	} 
?>
