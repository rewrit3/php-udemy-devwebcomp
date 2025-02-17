<?php

class Pessoa {
    public $nome =  null;

    function __construct($nome) {
        $this->nome = $nome;

        echo 'Objeto iniciado.<br>';
    }

    function __destruct() {
        echo 'Objeto removido.<br>';
    }

    function __get($atributo) {
        return $this->$atributo;
    }

    function correr() {
        return $this->__get('nome') . ' está correndo.';
    }
}

$pessoa = new Pessoa('Adolfo');
echo 'Nome: ' . $pessoa->__get('nome') . '<br>';
echo $pessoa->correr() . '<br>';

unset($pessoa);
