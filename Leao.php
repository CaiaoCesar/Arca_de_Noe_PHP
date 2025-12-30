<?php 
    class Leao extends Mamifero{
        public function emitirSom(){
            echo "<br />ROOOAAAR!<br />"; 
        }
        
         public function cacar() {
            echo "<br />{$this->nome} está caçando!<br />";
        }
    }
?>