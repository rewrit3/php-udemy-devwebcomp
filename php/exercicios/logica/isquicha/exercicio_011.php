<?php

// Estruturas sequenciais
// Exercicio 011
// Faça um Programa que peça 2 números inteiros e um número real. 
// Calcule e mostre: 
// - o produto do dobro do primeiro com metade do segundo. 
// - a soma do triplo do primeiro com o terceiro. 
// - o terceiro elevado ao cubo.
$numeroInteiro1 = 1;
$numerointeiro2 = 4;
$numeroReal3 = 3;

$dobro = $numeroInteiro1 * 2;
$triplo = $numeroInteiro1 * 3;
$metade = $numerointeiro2 / 2;

$produto = $dobro * $metade;
$soma = $triplo + $numeroReal3;
$cubo = $numeroReal3 * 3;

echo 'O produto do dobro do primeiro com metade do segundo é: ' . $produto;
echo '<br>';
echo 'A soma do triplo do primeiro com o terceiro é: ' . $soma;
echo '<br>';
echo 'O terceiro elevado ao cubo é: ' . $cubo;
