<?php

// Estruturas de decisão
// Exercicio 024
/* 
  Faça um Programa que leia três números e mostre o maior deles.
*/
$numero1 = 20;
$numero2 = 10;
$numero3 = 15;

$maiorNumero = $numero1; // Assume que o primeiro é o maior inicialmente

if ($numero2 > $maiorNumero):
  $maiorNumero = $numero2;
endif;

if ($numero3 > $maiorNumero):
  $maiorNumero = $numero3;
endif;

echo 'Número 1: ' . $numero1 . '<br>';
echo 'Número 2: ' . $numero2 . '<br>';
echo 'Número 3: ' . $numero3 . '<br><br>';
echo "O maior número é: $maiorNumero.";
