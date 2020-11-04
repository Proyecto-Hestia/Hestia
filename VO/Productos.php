<?php
    class Producto{
        private $frmid;
        private $frmnombre;
        private $frmcategoria_id;
        private $frmimg_pro;
        private $frmdes_pro;
        private $frmstock;
        private $frmstockmin;
        private $frmval_pro;
        private $frmestado;
        
        public function Producto(){
        }

        public function getfrmid(){
            return $this->frmid;
        }
        public function getfrmnombre(){
            return $this->frmnombre;
        }
        public function getfrmcategoria_id(){
            return $this->frmcategoria_id;
        }
        public function getfrmimg_pro(){
            return $this->frmimg_pro;
        }
        public function getfrmdes_pro(){
            return $this->frmdes_pro;
        }
        public function getfrmstock(){
            return $this->frmstock;
        }
        public function getfrmstockmin(){
            return $this->frmstockmin;
        }
        public function getfrmval_pro(){
            return $this->frmval_pro;
        }
        public function getfrmestado(){
            return $this->frmestado;
        }
        
        /*SET*/
        public function setfrmid($valor){
            $this->frmid = $valor;
        }
        public function setfrmnombre($valor){
            $this->frmnombre = $valor;
        }
        public function setfrmcategoria_id($valor){
            $this->frmcategoria_id = $valor;
        }
        public function setfrmimg_pro($valor){
            $this->frmimg_pro = $valor;
        }
        public function setfrmdes_pro($valor){
            $this->frmdes_pro = $valor;
        }
        public function setfrmstock($valor){
            $this->frmstock = $valor;
        }
        public function setfrmstockmin($valor){
            $this->frmstockmin = $valor;
        }
        public function setfrmval_pro($valor){
            $this->frmval_pro = $valor;
        }
        public function setfrmestado($valor){
            $this->frmestado = $valor;
        }
        
    }
?>