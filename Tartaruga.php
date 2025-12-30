<?php 
    class Tartaruga extends Reptil {
        public function emitirSom() {
            echo "... (tartarugas são silenciosas) ...";
        }

        public function esconderNoCasco() {
            echo "{$this->nome} se escondeu no casco!";
        }
    }
?>