<?php
// Estruturas de repetição
// Exercicio 049
/* 
  Supondo que a população de um país A seja da ordem de 80000 habitantes 
  com uma taxa anual de crescimento de 3% e que a população de 
  B seja 200000 habitantes com uma taxa de crescimento de 1.5%.

  Faça um programa que calcule e escreva o número de anos necessários para que 
  a população do país A ultrapasse ou iguale a população do país B, 
  mantidas as taxas de crescimento.
*/
$populationA = 80000;
$populationB = 200000;

$growthRateA = 0.03;
$growthRateB = 0.015;

$years = 0;

while ($populationA < $populationB):
  $populationA += $populationA * $growthRateA;
  $populationB += $populationB * $growthRateB;

  $years++;
endwhile;

echo "Serão necessários " . $years . " anos para que a população do país A ultrapasse ou iguale a população do país B.\n";
echo "População final do país A: " . number_format($populationA, 0, ',', '.') . " habitantes.\n";
echo "População final do país B: " . number_format($populationB, 0, ',', '.') . " habitantes.\n";
