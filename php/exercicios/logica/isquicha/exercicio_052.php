<?php
// Estruturas de repetição
// Exercicio 052
/* 
  Faça um programa que leia 5 números e informe o maior número.
*/
$numbers = [];
for ($i = 0; $i < 5; $i++):
  echo 'Digite os 5 números: ';
  $numbers[] = trim(fgets(STDIN));
endfor;

// SOLUÇÃO 1
// $bigger = max($numbers);
// echo "O maior dos 5 números é: $bigger\n";

// SOLUÇÃO 2
// Verificar se foram lidos 5 números válidos
if (count($numbers) === 5) {
  // Algoritmo puro para encontrar o maior número
  $bigger = null;

  for ($i = 0; $i < count($numbers); $i++) {
    if ($bigger === null || $numbers[$i] > $bigger) {
      $bigger = $numbers[$i];
    }
  }

  // Informar o maior número
  echo "\nO maior número digitado foi: " . $bigger . "\n";
} else {
  echo "\nNão foram digitados 5 números válidos. O programa será encerrado.\n";
}
