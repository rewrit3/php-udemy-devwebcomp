<?php
// Estruturas de repetição
// Exercicio 046
/* 
  Faça um programa que peça uma nota, entre zero e dez. 
  Mostre uma mensagem caso o valor seja inválido e continue pedindo 
  até que o usuário informe um valor válido.
*/
echo 'Digite uma nota entre 0 e 10: ';
$grade = trim(fgets(STDIN));

while (!is_numeric($grade) or $grade < 0 or $grade > 10) {
  echo 'Valor inválido. Por favor, digite uma nota válida (0 a 10): ';

  $grade = trim(fgets(STDIN));
}

echo "Nota válida: $grade \n";
