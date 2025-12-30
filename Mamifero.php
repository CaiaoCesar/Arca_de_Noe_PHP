<?php 
    class Mamifero extends Animal {
        protected $corPelo; 

        public function amamentar() {
            if ($this->sexo === "F") {
                echo "O animal está amamentando";
            }

            echo "Não foi possível amamentar";
        }
    }
?>