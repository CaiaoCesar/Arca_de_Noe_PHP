<?php
    require_once("Ave.php");

    class Papagaio extends Ave {
        public function emitirSom() {
            echo "<br />Loro quer biscoito!<br />";
        }

        public function falar($frase) {
            return $frase;
        }
    }
?>