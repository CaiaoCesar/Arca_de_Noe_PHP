<?php 
    class Garca extends Ave {
        public function emitirSom() {
            echo "<br />Craak craak!<br />"; 
        }

        public function pescar() {
            echo "<br />{$this->nome} pescou um peixe!<br />";
        }
    }
?>