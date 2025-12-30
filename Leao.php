<?php 
    class Leao extends Mamifero{
        public function emitirSom(){
            echo "ROOOAAAR!"; 
        }
        
         public function cacar() {
            echo "{$this->nome} está caçando!";
        }
    }
?>