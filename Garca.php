<?php 
    class Garca extends Ave {
        public function emitirSom() {
            echo "Craak craak!"; 
        }

        public function pescar() {
            echo "{$this->nome} pescou um peixe!";
        }
    }
?>