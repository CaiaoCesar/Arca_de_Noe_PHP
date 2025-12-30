<?php
require_once 'Arca.php';
require_once 'Macaco.php';
require_once 'Leao.php';
require_once 'Papagaio.php';
require_once 'Cobra.php';

// Criar a arca
$arca = new Arca("Arca de Noé");

// Criar animais
$macacoM = new Macaco("George", 45.0, "M", "marrom");
$macacoF = new Macaco("Jane", 38.0, "F", "marrom");
$leaoM = new Leao("Simba", 190.0, "M", "dourado");
$leaoF = new Leao("Nala", 130.0, "F", "dourado");

// Embarcar - funciona (1 macho e 1 fêmea de cada)
$arca->embarcar($macacoM);  // OK
$arca->embarcar($macacoF);  // OK
$arca->embarcar($leaoM);    // OK
$arca->embarcar($leaoF);    // OK

// Tentar embarcar outro macho - não pode!
$macacoM2 = new Macaco("Tarzan", 50.0, "M", "preto");
$arca->embarcar($macacoM2); // ERRO: Já existe um Macaco macho na arca!

// Testar métodos
echo $macacoM->emitirSom();      // "Uh uh ah ah!"
echo $macacoM->escalarArvore();  // "George subiu na árvore!"

echo $leaoF->emitirSom();        // "ROOOAAAR!"
echo $leaoF->amamentar();        // Funciona, pois é fêmea

// Listar todos
$arca->listarAnimais();

// Polimorfismo em ação!
$arca->chamarAnimais();
// Saída:
// George: Uh uh ah ah!
// Jane: Uh uh ah ah!
// Simba: ROOOAAAR!
// Nala: ROOOAAAR!

print_r($arca);

// Testes de outras funções

// Buscar animal por nome
$arca->buscarAnimalPorNome("George");
// Saída:
// Animal encontrado com o respectivo nome: George
// Animal: George

// Contar animais
echo $arca->contarAnimais();

// Desembarcar
$arca->desembarcar("George");
$arca->desembarcar("Jane");
$arca->desembarcar("Simba");
$arca->desembarcar("Nala");
$arca->desembarcar("Tarzan");

// Listar todos
$arca->listarAnimais();