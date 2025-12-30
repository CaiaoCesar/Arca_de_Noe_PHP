# Arca_de_Noe_PHP

# 🚢 Exercício de POO: A Arca de Noé

## Objetivo

Criar um sistema simples em PHP 7.4 que simule a Arca de Noé, praticando os conceitos básicos de Programação Orientada a Objetos: **classes, herança, encapsulamento e polimorfismo**.

---

## O Problema

Noé precisa embarcar animais na sua arca. Cada animal tem características próprias e faz sons diferentes. Você vai criar as classes para representar os animais e a arca.

---

## Parte 1: Classe Base

### Criar a classe `Animal`

Esta é a classe mãe de todos os animais.

**Propriedades (todas protegidas):**
- `nome` (string) - Ex: "Simba"
- `peso` (float) - Em kg
- `sexo` (string) - "M" ou "F"

**Métodos:**
- `__construct($nome, $peso, $sexo)` - Construtor
- `getNome()`, `getPeso()`, `getSexo()` - Getters
- `emitirSom()` - Retorna "..." (será sobrescrito pelos filhos)
- `comer()` - Retorna "{nome} está comendo..."
- `dormir()` - Retorna "{nome} está dormindo..."

---

## Parte 2: Classes Intermediárias

### Classe `Mamifero` (extends Animal)

**Propriedade adicional:**
- `corPelo` (string)

**Método adicional:**
- `amamentar()` - Retorna mensagem (só funciona se sexo = "F")

---

### Classe `Ave` (extends Animal)

**Propriedade adicional:**
- `corPenas` (string)

**Método adicional:**
- `voar()` - Retorna "{nome} está voando!"

---

### Classe `Reptil` (extends Animal)

**Propriedade adicional:**
- `venenoso` (bool)

**Método adicional:**
- `rastejar()` - Retorna "{nome} está rastejando..."

---

## Parte 3: Animais Específicos

### Mamíferos

#### `Macaco` (extends Mamifero)
- Sobrescrever `emitirSom()` → Retorna "Uh uh ah ah!"
- Método extra: `escalarArvore()` → Retorna "{nome} subiu na árvore!"

#### `Leao` (extends Mamifero)
- Sobrescrever `emitirSom()` → Retorna "ROOOAAAR!"
- Método extra: `cacar()` → Retorna "{nome} está caçando!"

#### `Elefante` (extends Mamifero)
- Sobrescrever `emitirSom()` → Retorna "Pruuuuu!"
- Método extra: `jogarAgua()` → Retorna "{nome} jogou água com a tromba!"

---

### Aves

#### `Papagaio` (extends Ave)
- Sobrescrever `emitirSom()` → Retorna "Loro quer biscoito!"
- Método extra: `falar($frase)` → Retorna a frase repetida

#### `Garca` (extends Ave)
- Sobrescrever `emitirSom()` → Retorna "Craak craak!"
- Método extra: `pescar()` → Retorna "{nome} pescou um peixe!"

---

### Répteis

#### `Cobra` (extends Reptil)
- Sobrescrever `emitirSom()` → Retorna "Ssssssss!"
- Método extra: `darBote()` → Retorna "{nome} deu um bote!"

#### `Tartaruga` (extends Reptil)
- Sobrescrever `emitirSom()` → Retorna "..." (tartarugas são silenciosas)
- Método extra: `esconderNoCasco()` → Retorna "{nome} se escondeu no casco!"

---

## Parte 4: A Arca

### Classe `Arca`

**Propriedades:**
- `nome` (string) - "Arca de Noé"
- `animais` (array) - Lista de animais embarcados

**Métodos:**
- `__construct($nome)`
- `embarcar(Animal $animal)` - Adiciona animal na arca (só permite 1 macho e 1 fêmea de cada espécie)
- `desembarcar($nome)` - Remove animal pelo nome
- `listarAnimais()` - Mostra todos os animais
- `contarAnimais()` - Retorna quantidade de animais
- `chamarAnimais()` - Faz todos os animais emitirem som (polimorfismo!)

**Regra de embarque:**
- Só pode entrar 1 macho e 1 fêmea de cada espécie
- Use `get_class($animal)` para descobrir a espécie (ex: "Macaco", "Leao")
- Antes de embarcar, verificar se já existe um animal da mesma espécie e mesmo sexo

---

## Estrutura de Pastas

```
arca-de-noe/
├── index.php
├── Animal.php
├── Mamifero.php
├── Ave.php
├── Reptil.php
├── Macaco.php
├── Leao.php
├── Elefante.php
├── Papagaio.php
├── Garca.php
├── Cobra.php
├── Tartaruga.php
└── Arca.php
```

---

## Exemplo de Uso Esperado

```php
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
```

---

## Conceitos Praticados

| Conceito | Onde aparece |
|----------|--------------|
| **Classe** | Animal, Arca, Macaco, etc. |
| **Objeto** | $macaco, $leoa, $arca |
| **Propriedades** | nome, peso, sexo, etc. |
| **Métodos** | emitirSom(), comer(), embarcar() |
| **Construtor** | __construct() em todas as classes |
| **Herança** | Macaco extends Mamifero extends Animal |
| **Encapsulamento** | Propriedades protected + getters |
| **Polimorfismo** | emitirSom() diferente em cada animal |
| **Sobrescrita** | Cada animal sobrescreve emitirSom() |

---

## Diagrama de Classes

```
                    Animal
                       │
        ┌──────────────┼──────────────┐
        │              │              │
    Mamifero          Ave          Reptil
        │              │              │
   ┌────┼────┐    ┌────┴────┐    ┌───┴───┐
   │    │    │    │         │    │       │
Macaco Leao Elefante Papagaio Garca Cobra Tartaruga


        Arca (contém array de Animal)
```

---

## Dicas

1. Comece criando a classe `Animal` com tudo funcionando
2. Depois crie `Mamifero`, `Ave` e `Reptil`
3. Por último, crie os animais específicos
4. Teste cada classe antes de passar para a próxima
5. A classe `Arca` pode ser feita por último

---

**Boa sorte! 🦁🐒🦜🐍🐢**
