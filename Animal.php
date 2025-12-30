<?php
    class Animal {
        protected $nome; 
        protected $peso;
        protected $sexo; 

        public function __construct($nomeAnimal, $pesoAnimal, $sexoAnimal) {
            $this->nome = $nomeAnimal;
            $this->peso = $pesoAnimal;
            $this->sexo = $sexoAnimal;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function emitirSom() {
            echo "O animal está fazendo barulho...";
        }

        public function comer() {
            echo "O " . $this->getNome() . " está comendo...";
        }

        public function dormir() {
            echo "O " . $this->getNome() . " está dormindo...";
        }

        public function analisaSexo() {
            if ($this->sexo != "F" || $this->sexo != "M") {
                echo "Ideologia de Genero não!";
            }
        }
    }
?>
