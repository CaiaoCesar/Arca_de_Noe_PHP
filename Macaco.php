<?php 
    class Macaco extends Mamifero{
        public function emitirSom(){
            echo "Uh uh ah ah!";
        }

        public function escalarArvore() {
            echo "{$this->nome} subiu na árvore!";
        }
    }
?>