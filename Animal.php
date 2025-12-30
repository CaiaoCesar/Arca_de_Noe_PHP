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
            echo "<br /><h3>O animal está fazendo barulho...</h3><br />";
        }

        public function comer() {
            echo "<br /><h3>O " . $this->getNome() . " está comendo...</h3><br />";
        }

        public function dormir() {
            echo "<br /><h3>O " . $this->getNome() . " está dormindo...</h3><br />";
        }

        public function analisaSexo() {
            if ($this->sexo != "F" || $this->sexo != "M") {
                echo "<br /><h3>Ideologia de Genero pra bicho não!</h3><br />";
            }
        }
    }
?>
