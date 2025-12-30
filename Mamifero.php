<?php 
    require_once("Animal.php");
    
    class Mamifero extends Animal {
        protected $corPelo; 

        public function __construct($nomeAnimal, $pesoAnimal, $sexoAnimal, $corPelo)
        {
            parent::__construct($nomeAnimal, $pesoAnimal, $sexoAnimal);
            $this->corPelo = $corPelo;
        }

        public function amamentar() {
            if ($this->sexo === "F") {
                echo "<br /><h3>O animal está amamentando</h3><br />";
            }

            echo "<br /><h3>Não foi possível amamentar</h3><br />";
        }
    }
?>