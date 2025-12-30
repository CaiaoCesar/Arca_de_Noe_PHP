<?php 
    class Tartaruga extends Reptil {
        public function emitirSom() {
            echo "<br />... (tartarugas são silenciosas) ...<br />";
        }

        public function esconderNoCasco() {
            echo "<br />{$this->nome} se escondeu no casco!<br />";
        }
    }
?>