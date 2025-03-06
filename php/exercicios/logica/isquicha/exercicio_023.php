<?php

// Estruturas de decisão
// Exercicio 023
/* 
  Faça um programa para a leitura de duas notas parciais de um aluno. 
  O programa deve calcular a média alcançada por aluno e apresentar: 
  A mensagem "Aprovado", se a média alcançada for maior ou igual a sete; 
  A mensagem "Reprovado", se a média for menor do que sete; 
  A mensagem "Aprovado com Distinção", se a média for igual a dez.

*/
$notaParcial1 = 10.0;
$notaParcial2 = 10.0;

$media = ($notaParcial1 + $notaParcial2) / 2;

if ($media < 7.0):
  echo "Aluno reprovado. <br> Média: $media. <br>";
elseif ($media >= 7.0 and $media < 10.0):
  echo "Aluno aprovado. <br> Média: $media. <br>";
elseif ($media == 10.0):
  echo "Aluno aprovado com distinção. <br> Média: $media. <br>";
endif;
