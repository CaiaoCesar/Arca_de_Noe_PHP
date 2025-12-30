<?php 
    require_once("Animal.php");
    
    class Reptil extends Animal{
        protected $venenoso;

        public function __construct($nomeAnimal, $pesoAnimal, $sexoAnimal, $venenoso)
        {
            parent::__construct($nomeAnimal, $pesoAnimal, $sexoAnimal);
            $this->venenoso = $venenoso;
        }

        public function rastejar() {
            echo "<br />{$this->nome} está rastejando...<br />";
        }
    }
?>