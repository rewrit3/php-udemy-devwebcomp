<?php

// Estruturas sequenciais
// Exercicio 014
// João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar 
// o rendimento diário de seu trabalho.

// Toda vez que ele traz um peso de peixes maior que o estabelecido pelo 
// regulamento de pesca do estado de São Paulo (50 quilos) deve pagar uma multa 
// de R$ 4,00 por quilo excedente.

// João precisa que você faça um programa que leia a variável peso 
// (peso de peixes) e calcule o excesso.

// Gravar na variável excesso a quantidade de quilos além do limite e na 
// variável multa o valor da multa que João deverá pagar. 
// Imprima os dados do programa com as mensagens adequadas.
$limite = 50.00;
$valorMultaPorKg = 4.00;
$peso = 50;

if ($peso > $limite):
    $excesso = $peso - $limite;
    $multa = $excesso * $valorMultaPorKg;

    echo 'Limite: ' . number_format($limite, 2, '.', ',') . 'kg <br>';
    echo 'Multa: R$' . number_format($valorMultaPorKg, 2, ',', '.') . '/kg <br>';
    echo '<hr>';
    echo 'Peso: ' . number_format($peso, 2, '.', ',') . 'kg <br>';
    echo 'Excesso: ' . number_format($excesso, 2, '.', ',') . 'kg <br>';
    echo 'Multa: R$' . number_format($multa, 2, ',', '.') . '<br>';
elseif ($peso <= $limite):
    echo 'Limite: ' . number_format($limite, 2, '.', ',') . 'kg <br>';
    echo 'Multa: R$' . number_format($valorMultaPorKg, 2, ',', '.') . '/kg <br>';
    echo '<hr>';
    echo 'Peso: ' . number_format($peso, 2, '.', ',') . 'kg <br>';
    echo 'Excesso: Nenhum <br>';
    echo 'Multa: Nenhuma <br>';
endif;
