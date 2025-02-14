<?php

// modelo
class Funcionario {
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos = null;
    public $cargo = null;
    public $salario = null;

    // getters e setters (overloading)
    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }

    // function setNome($nome) {
    //     $this->nome = $nome;
    // }

    // function setTelefone($telefone) {
    //     $this->telefone = $telefone;
    // }

    // function setNumeroFilhos($numeroFilhos) {
    //     $this->numeroFilhos = $numeroFilhos;
    // }

    // function getNome() {
    //     return $this->nome;
    // }

    // function getNumeroFilhos() {
    //     return $this->numeroFilhos;
    // }

    // function getTelefone() {
    //     return $this->telefone;
    // }

    // métodos
    function resumirCadastroFuncionario() {
        return  'Nome: ' . $this->__get('nome') . '<br>' .
            'Filhos: ' . $this->__get('numeroFilhos') . '<br>' .
            'Telefone: ' . $this->__get('telefone') . '<br>' .
            'Cargo: ' . $this->__get('cargo') . '<br>' .
            'Salário: ' . $this->__get('salario');
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

// $funcionario1 = new Funcionario();
// $funcionario1->setNome('Adolfo');
// $funcionario1->setTelefone('(65) 9 9688-8989');
// $funcionario1->setNumeroFilhos(2);
// echo $funcionario1->resumirCadastroFuncionario();

// echo '<hr>';

// $funcionario2 = new Funcionario();
// $funcionario2->setNome('Sheila');
// $funcionario2->setTelefone('(66) 9 9999-9999');
// $funcionario2->setNumeroFilhos(0);
// echo $funcionario2->getNome() . ' possui ' . $funcionario2->getNumeroFilhos() . ' filho(s). <br> Seu telefone é ' . $funcionario2->getTelefone();

$funcionario1 = new Funcionario();
$funcionario1->__set('nome', 'Adolfo');
$funcionario1->__set('telefone', '(65) 9 9688-8989');
$funcionario1->__set('numeroFilhos', 2);
$funcionario1->__set('cargo', 'Programador');
$funcionario1->__set('salario', 2000);
echo $funcionario1->resumirCadastroFuncionario();

echo '<hr>';

$funcionario2 = new Funcionario();
$funcionario2->__set('nome', 'Sheila');
$funcionario2->__set('telefone', '(66) 9 9999-9999');
$funcionario2->__set('numeroFilhos', 0);
$funcionario2->__set('cargo', 'Farmacêutica');
$funcionario2->__set('salario', 5000);
echo $funcionario2->resumirCadastroFuncionario();
// echo $funcionario2->__get('nome') . ' possui ' . $funcionario2->__get('numeroFilhos') . ' filho(s). <br> Seu telefone é ' . $funcionario2->__get('telefone');
