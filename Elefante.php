<?php 
    class Elefante extends Mamifero {
        public function emitirSom(){
            echo "Pruuuuu!";
        }

        public function jogarAgua() {
            echo "{$this->nome} jogou água com a tromba!";
        }
    }
?>