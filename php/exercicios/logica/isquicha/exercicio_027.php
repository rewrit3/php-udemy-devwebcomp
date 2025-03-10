<?php

// Estruturas de decisão
// Exercicio 027
/* 
  Faça um Programa que leia três números e mostre-os em ordem decrescente.
*/
function ordenarDecrescente($num1, $num2, $num3) {
  $numeros = [$num1, $num2, $num3];
  rsort($numeros);

  return $numeros;
}

function ordenarCrescente($num1, $num2, $num3) {
  $numeros = [$num1, $num2, $num3];
  sort($numeros);

  return $numeros;
}

$num1 = 10;
$num2 = 5;
$num3 = 15;

$numerosOrdenadosDec = ordenarDecrescente($num1, $num2, $num3);
$numerosOrdenadosCre = ordenarCrescente($num1, $num2, $num3);

echo 'Números em ordem decrescente: ' . implode(', ', $numerosOrdenadosDec);
echo '<br>';
echo 'Números em ordem crescente: ' . implode(', ', $numerosOrdenadosCre);
