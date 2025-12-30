<?php
    class Papagaio extends Ave {
        public function emitirSom() {
            echo "Loro quer biscoito!";
        }

        public function falar($frase) {
            return $frase;
        }
    }
?>