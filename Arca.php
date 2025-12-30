<?php 
    require_once "Animal.php";
    class Arca {
        private $nome;
        private $animais = array(); 

        public function __construct($nomeArca){
            $this->nome = $nomeArca; 
        }
    }
?>