<?php 
    require_once("Mamifero.php");
    
    class Macaco extends Mamifero{
        public function emitirSom(){
            echo "<br />Uh uh ah ah!<br />";
        }

        public function escalarArvore() {
            echo "<br />{$this->nome} subiu na árvore!<br />";
        }
    }
?>