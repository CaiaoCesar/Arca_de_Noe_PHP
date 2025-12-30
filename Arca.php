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
            $className = get_class($animal);
            $sex = $animal->getSexo();
            if (isset($this->animais[$className . $sex])) {
                echo "<br /><h3>Especie: '" . $className . "', do Sexo: " . $sex .  ", do Animal '" . $animal->getNome() . "'Já existe na arca!</h3><br />";
                return false;
            }
            $this->animais[$className . $sex] = $animal;
            echo "<h3>Especie: " . $className . ", Nome: '" . $animal->getNome() . "', Sexo: " . $sex . "', Peso: " . $animal->getPeso() . "'Adicionado à Arca.</h3>";
        }

       public function desembarcar($nome) {
            foreach ($this->animais as $key => $animal) {
                if ($animal->getNome() === $nome) {
                    unset($this->animais[$key]);
                    echo "<h3>Animal $nome desembarcado!</h3>";
                    return true;
                }
            }
            echo "<h3>Animal $nome não encontrado!</h3>";
            return false;
        }   

        public function listarAnimais() {
            echo "<br /><h2><strong> - Lista de Animais na Arca: </strong><h2>";
            foreach ($this->animais as $animal) {
                echo "<h3>Animal: " . $animal->getNome() . ", Sexo: " . $animal->getSexo() . ", Peso: " . $animal->getPeso() . "</h3>";
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
                echo "Animal: " .$animal->getNome() . " Sexo: " . $animal->getSexo() . " Peso: " . $animal->getPeso();
            }
        }

        public function contarAnimais() {
            echo "<br /><h2>Total de " . count($this->animais) . " animais na " . $this->nome . "</h2><br />";                                                                                                                                                                                                                                    
        }

        public function chamarAnimais(){
            echo "<br /><h2> Chamando os animais...</h2><br />";
            foreach ($this->animais as $animal) {
                echo "<h3>Animal: " . $animal->getNome() . "</h3>";
                $animal->emitirSom(); 
                echo "<br />";  
            }
        }
    }
?>