<?php

// modelo
class Funcionario {
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos = null;

    // getters e setters
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNumeroFilhos($numeroFilhos) {
        $this->numeroFilhos = $numeroFilhos;
    }

    function getNome() {
        return $this->nome;
    }

    function getNumeroFilhos() {
        return $this->numeroFilhos;
    }

    function getTelefone() {
        return $this->telefone;
    }

    // métodos
    function resumirCadastroFuncionario() {
        return "$this->nome possui $this->numeroFilhos filho(s). <br> Seu telefone é $this->telefone. <br>";
    }

    function modificarNumeroFilhos($numeroFilhos) {
        $this->numeroFilhos = $numeroFilhos;
    }
}

// $funcionario1 = new Funcionario();
// echo $funcionario1->resumirCadastroFuncionario();

// $funcionario1->modificarNumeroFilhos(3);
// echo $funcionario1->resumirCadastroFuncionario();

// echo '<hr>';

// $funcionario2 = new Funcionario();
// echo $funcionario2->resumirCadastroFuncionario();

// $funcionario2->modificarNumeroFilhos(1);
// echo $funcionario2->resumirCadastroFuncionario();

$funcionario1 = new Funcionario();
$funcionario1->setNome('Adolfo');
$funcionario1->setTelefone('(65) 9 9688-8989');
$funcionario1->setNumeroFilhos(2);
echo $funcionario1->resumirCadastroFuncionario();

echo '<hr>';

$funcionario2 = new Funcionario();
$funcionario2->setNome('Sheila');
$funcionario2->setTelefone('(66) 9 9999-9999');
$funcionario2->setNumeroFilhos(0);
echo $funcionario2->getNome() . ' possui ' . $funcionario2->getNumeroFilhos() . ' filho(s). <br> Seu telefone é ' . $funcionario2->getTelefone();
