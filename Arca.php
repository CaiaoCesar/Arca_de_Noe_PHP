<?php 
    require_once "Animal.php";
    class Arca {
        private $nome;
        private $animais = array(); 

        public function __construct($nomeArca){
            $this->nome = $nomeArca; 
        }

        public function embarcar(Animal $animal){
            $this->animais[] = $animal;
            echo "<br />Animal '" . $animal->getNome() . "'Adicionado à Arca.<br />";
        }

        public function desembarcar($nome) {
            if (isset($this->animais[$nome])) {
                unset($this->animais[$nome]);
                echo "<br />Animal " . $nome. "desembarcado!";
                return true;      
            }
            echo "<br />Animal " . $nome. " não desembarcado!";
            return false; 
            
        }
        public function listarAnimais() {
            echo "<br />Lista de Animais na Arca: <br />";
            foreach ($this->animais as $animal) {
                echo "<br />Animal: " . $animal->getNome() . ", Sexo: " . $animal->getSexo() . ", Peso: " . $animal->getPeso() . "<br />";
            }
        }

        public function buscarAnimalPorNome($nomePesquisado) {
            $resultadoBusca = array_filter($this->animais, function ($animal) use ($nomePesquisado) {
                return $animal->getNome() === $nomePesquisado;
            });
            if (empty($resultadoBusca)) {
                echo "<br />Nenhum animal encontrado com o nome: " . $nomePesquisado . "<br/>";
            } 
            echo "Animal encontrado com o respectivo nome: " . $nomePesquisado . "<br />";
            foreach ($resultadoBusca as $animal) {
                echo "<br />Animal: " .$animal->getNome() . "<br />";
            }
        }

        public function contarAnimais() {
            echo "<br />Total de " . count($this->animais) . " animais na " . $this->nome . "<br />";                                                                                                                                                                                                                                    
        }

        public function chamarAnimais(){
            foreach ($this->animais as $animal) {
                echo "<br />Animal: " . $animal->getNome() . "<br />";
                $animal->emitirSom(); 
                echo "<br />";  
            }
        }
    }
?>