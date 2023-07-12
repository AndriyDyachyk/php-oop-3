<?php 

    class Allegato{
        private $nome;
        private $tipo;
        private $dimensione;

        public function __construct(String $_nome, String $_tipo, Float $_dimensione){
            $this->nome = $_nome;
            $this->tipo = $_tipo;
            $this->dimensione = $_dimensione;
        }

        public function setNome($_nome){
            $this->nome = $_nome;
        }

        public function getNome(){
            return $this->nome;
        }
        
        public function setTipo($_tipo){
            $this->tipo = $_tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }
        
        public function setDimensione($_dimensione){
            $this->dimensione = $_dimensione;
        }

        public function getDimensione(){
            return $this->dimensione;
        }
    }

?>