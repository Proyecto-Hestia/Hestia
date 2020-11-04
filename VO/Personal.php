<?php
    class Personal{
        private $frmp_id;
        private $frmp_nom;
        private $frmp_ape;
        private $frmp_fech;
        private $frmp_genero;
        private $frmp_eps;
        private $frmp_pens;
        private $frmp_arl;
        private $frmp_correo;
        private $frmp_tel;
        private $frmp_dir;
        
        public function Persona(){
        }

        public function getfrmp_id(){
            return $this->frmp_id;
        }
        public function getfrmp_nom(){
            return $this->frmp_nom;
        }
        public function getfrmp_ape(){
            return $this->frmp_ape;
        }
        public function getfrmp_fech(){
            return $this->frmp_fech;
        }
        public function getfrmp_genero(){
            return $this->frmp_genero;
        }
        public function getfrmp_eps(){
            return $this->frmp_eps;
        }
        public function getfrmp_pens(){
            return $this->frmp_pens;
        }
        public function getfrmp_arl(){
            return $this->frmp_arl;
        }
        public function getfrmp_correo(){
            return $this->frmp_correo;
        }
        public function getfrmp_tel(){
            return $this->frmp_tel;
        }
        public function getfrmp_dir(){
            return $this->frmp_dir;
        }
        
        
        
        /*SET*/
        public function setfrmp_id($valor){
            $this->frmp_id = $valor;
        }
        public function setfrmp_nom($valor){
            $this->frmp_nom = $valor;
        }
        public function setfrmp_ape($valor){
            $this->frmp_ape = $valor;
        }
        public function setfrmp_fech($valor){
            $this->frmp_fech = $valor;
        }
        public function setfrmp_genero($valor){
            $this->frmp_genero = $valor;
        }
        public function setfrmp_eps($valor){
            $this->frmp_eps = $valor;
        }
        public function setfrmp_pens($valor){
            $this->frmp_pens = $valor;
        }
        public function setfrmp_arl($valor){
            $this->frmp_arl = $valor;
        }
        public function setfrmp_correo($valor){
            $this->frmp_correo = $valor;
        }
        public function setfrmp_tel($valor){
            $this->frmp_tel = $valor;
        }
        public function setfrmp_dir($valor){
            $this->frmp_dir = $valor;
        }
        
        
        
        
        
    }
?>