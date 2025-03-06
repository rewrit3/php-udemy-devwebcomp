<?php

// Estruturas de decisão
// Exercicio 022
/* 
  Faça um Programa que verifique se uma letra digitada é vogal ou consoante.

*/
// $letraDigitada = 'A';
$letraDigitada = 'X';

$letraMinuscula = strtolower($letraDigitada);
$vogais = ['a', 'e', 'i', 'o', 'u'];

if (in_array($letraMinuscula, $vogais)):
  echo "A letra '$letraDigitada' é: Vogal.<br>";
else:
  echo "A letra '$letraDigitada' é: Consoante.<br>";
endif;
