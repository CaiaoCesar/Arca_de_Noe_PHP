<?php 
    class Ave extends Animal{
        protected $corPenas; 

        public function voar() {
            echo "{$this->nome} está voando!";
        }
    }
?>