<?php 
    class Mamifero extends Animal {
        protected $corPelo; 

        public function __construct($nomeAnimal, $pesoAnimal, $sexoAnimal, $corPelo)
        {
            parent::__construct($nomeAnimal, $pesoAnimal, $sexoAnimal);
            $this->corPelo = $corPelo;
        }

        public function amamentar() {
            if ($this->sexo === "F") {
                echo "<br />O animal está amamentando<br />";
            }

            echo "<br />Não foi possível amamentar<br />";
        }
    }
?>