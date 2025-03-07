<?php

// Estruturas de decisão
// Exercicio 025
/* 
  Faça um Programa que leia três números e mostre o maior e o menor deles.
*/
$numero1 = 200;
$numero2 = 100;
$numero3 = 300;

$maiorNumero = $numero1; // Assume que o primeiro é o maior inicialmente

if ($numero2 > $maiorNumero):
  $maiorNumero = $numero2;
endif;

if ($numero3 > $maiorNumero):
  $maiorNumero = $numero3;
endif;

$menorNumero = $numero1; // Assume que o primeiro é o menor inicialmente

if ($numero2 < $menorNumero):
  $menorNumero = $numero2;
endif;

if ($numero3 < $menorNumero):
  $menorNumero = $numero3;
endif;

echo 'Número 1: ' . $numero1 . '<br>';
echo 'Número 2: ' . $numero2 . '<br>';
echo 'Número 3: ' . $numero3 . '<br>';
echo '<br>';
echo "O maior número é: $maiorNumero.";
echo '<br>';
echo "O menor número é: $menorNumero.";
