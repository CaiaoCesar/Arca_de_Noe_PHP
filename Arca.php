<?php 
    require_once "Animal.php";
    class Arca {
        private $nome;
        private $animais = array(); 

        public function __construct($nomeArca){
            $this->nome = $nomeArca; 
            echo "<br /><h1><strong>" . $this->nome . "</strong> criada.</h1><br />";
        }

        public function embarcar(Animal $animal){
            if (isset($this->animais[get_class($animal) . $animal->getSexo()])){
                echo "<br /><h3>Animal '" . $animal->getNome() . ", Sexo: " . $animal->getSexo() . ", Peso: " . $animal->getPeso() . "'Já existe na arca!</h3><br />";
                return false;
            }
            $this->animais[] = $animal;
            echo "<br /><h3>Animal '" . $animal->getNome() . ", Sexo: " . $animal->getSexo() . ", Peso: " . $animal->getPeso() . "'Adicionado à Arca.</h3><br />";
        }

       public function desembarcar($nome) {
            foreach ($this->animais as $key => $animal) {
                if ($animal->getNome() === $nome) {
                    unset($this->animais[$key]);
                    echo "<br /><h3>Animal $nome desembarcado!</h3><br />";
                    return true;
                }
            }
            echo "<br /><h3>Animal $nome não encontrado!</h3><br />";
            return false;
        }   

        public function listarAnimais() {
            echo "<br /><h2><strong> - Lista de Animais na Arca: </strong><h2><br />";
            foreach ($this->animais as $animal) {
                echo "<br /><h3>Animal: " . $animal->getNome() . ", Sexo: " . $animal->getSexo() . ", Peso: " . $animal->getPeso() . "</h3><br />";
            }
        }

        public function buscarAnimalPorNome($nomePesquisado) {
            $resultadoBusca = array_filter($this->animais, function ($animal) use ($nomePesquisado) {
                return $animal->getNome() === $nomePesquisado;
            });
            if (empty($resultadoBusca)) {
                echo "<br />Nenhum animal encontrado com o nome: " . $nomePesquisado . "<br/>";
            } 
            echo "<h3>Animal encontrado com o respectivo nome: " . $nomePesquisado . "</h3><br />";
            foreach ($resultadoBusca as $animal) {
                echo "<br />Animal: " .$animal->getNome() . "<br />";
            }
        }

        public function contarAnimais() {
            echo "<br /><h2>Total de " . count($this->animais) . " animais na " . $this->nome . "</h2><br />";                                                                                                                                                                                                                                    
        }

        public function chamarAnimais(){
            foreach ($this->animais as $animal) {
                echo "<br /><h3>Animal: " . $animal->getNome() . "</h3><br />";
                $animal->emitirSom(); 
                echo "<br />";  
            }
        }
    }
?>