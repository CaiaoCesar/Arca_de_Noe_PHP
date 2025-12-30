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
            echo "<br />O animal está fazendo barulho...<br />";
        }

        public function comer() {
            echo "<br />O " . $this->getNome() . " está comendo...<br />";
        }

        public function dormir() {
            echo "<br />O " . $this->getNome() . " está dormindo...<br />";
        }

        public function analisaSexo() {
            if ($this->sexo != "F" || $this->sexo != "M") {
                echo "<br />Ideologia de Genero pra bicho não!<br />";
            }
        }
    }
?>
