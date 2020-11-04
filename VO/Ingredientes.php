<?php
    class Ingrediente{
        private $frmid_ing;
        private $frmid_detalle;
        private $frmnom_ing;
        private $frmest_ing;
        private $frmstock_ing;
        private $frmval_ing;
     
        
        public function Ingrediente(){
        }

        public function getfrmid_ing(){
            return $this->frmid_ing;
        }
        public function getfrmid_detalle(){
            return $this->frmid_detalle;
        }
        public function getfrmnom_ing(){
            return $this->frmnom_ing;
        }
        public function getfrmest_ing(){
            return $this->frmest_ing;
        }
        public function getfrmstock_ing(){
            return $this->frmstock_ing;
        }
        public function getfrmval_ing(){
            return $this->frmval_ing;
        }
      
        
        /*SET*/
        public function setfrmid_ing($valor){
            $this->frmid_ing = $valor;
        }
        public function setfrmid_detalle($valor){
            $this->frmid_detalle = $valor;
        }
        public function setfrmnom_ing($valor){
            $this->frmnom_ing = $valor;
        }
        public function setfrmest_ing($valor){
            $this->frmest_ing = $valor;
        }
        public function setfrmstock_ing($valor){
            $this->frmstock_ing = $valor;
        }
        public function setfrmval_ing($valor){
            $this->frmval_ing = $valor;
        }
        
    }
?>