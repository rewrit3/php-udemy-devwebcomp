<?php

// Estruturas de decisão
// Exercicio 021
/* 
  Faça um Programa que verifique se uma letra digitada é "F" ou "M". 
  Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido.
*/
// $letraDigitada = 'F';
// $letraDigitada = 'M';
$letraDigitada = 'O';

if ($letraDigitada === 'F'):
  echo "O sexo é: Feminino ($letraDigitada).<br>";
elseif ($letraDigitada === 'M'):
  echo "O sexo é: Masculino ($letraDigitada).<br>";
else:
  echo "O sexo é inválido.<br>";
endif;
