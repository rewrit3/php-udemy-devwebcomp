<?php
// Estruturas de repetição
// Exercicio 050
/* 
  Altere o programa anterior permitindo ao usuário informar as populações 
  e as taxas de crescimento iniciais. 
  Valide a entrada e permita repetir a operação.
*/
echo 'Digite a população do país A: ';
$populationA = trim(fgets(STDIN));
$populationA = (int) $populationA;
echo 'Digite a taxa de crescimento anual do país A: ';
$growthRateA = trim(fgets(STDIN));
$growthRateA = (int) $growthRateA;

echo 'Digite a população do país B: ';
$populationB = trim(fgets(STDIN));
$populationB = (int) $populationB;
echo 'Digite a taxa de crescimento anual do país B: ';
$growthRateB = trim(fgets(STDIN));
$growthRateB = (int) $growthRateB;

$years = 0;

while ($populationA < $populationB):
  $populationA += $populationA * $growthRateA;
  $populationB += $populationB * $growthRateB;

  $years++;
endwhile;

echo "Serão necessários " . $years . " anos para que a população do país A ultrapasse ou iguale a população do país B.\n";
echo "População final do país A: " . number_format($populationA, 0, ',', '.') . " habitantes.\n";
echo "População final do país B: " . number_format($populationB, 0, ',', '.') . " habitantes.\n";
