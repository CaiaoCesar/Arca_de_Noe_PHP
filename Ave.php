<?php 
    class Ave extends Animal{
        protected $corPenas;
        
        public function __construct($nomeAnimal, $pesoAnimal, $sexoAnimal, $corPenas)
        {
            parent::__construct($nomeAnimal, $pesoAnimal, $sexoAnimal);
            $this->corPenas = $corPenas;
        }

        public function voar() {
            echo "<br />{$this->nome} está voando!<br />";
        }
    }
?>