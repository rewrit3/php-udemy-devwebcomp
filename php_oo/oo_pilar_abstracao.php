<?php

// modelo
class Funcionario {
    // atributos
    public $nome = 'Adolfo';
    public $telefone = '65 9 9688 8989';
    public $numeroFilhos = 2;

    // métodos
    function resumirCadastroFuncionario() {
        return "$this->nome possui $this->numeroFilhos filho(s). <br>";
    }

    function modificarNumeroFilhos($numeroFilhos) {
        $this->numeroFilhos = $numeroFilhos;
    }
}

$funcionario1 = new Funcionario();
echo $funcionario1->resumirCadastroFuncionario();

$funcionario1->modificarNumeroFilhos(3);
echo $funcionario1->resumirCadastroFuncionario();

echo '<hr>';

$funcionario2 = new Funcionario();
echo $funcionario2->resumirCadastroFuncionario();

$funcionario2->modificarNumeroFilhos(1);
echo $funcionario2->resumirCadastroFuncionario();
