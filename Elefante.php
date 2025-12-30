<?php 
    class Elefante extends Mamifero {
        public function emitirSom(){
            echo "<br />Pruuuuu!<br />";
        }

        public function jogarAgua() {
            echo "<br />{$this->nome} jogou água com a tromba!<br />";
        }
    }
?>