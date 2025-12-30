<?php 
    class Reptil extends Animal{
        protected $venenoso;

        public function rastejar() {
            echo "{$this->nome} está rastejando...";
        }
    }
?>