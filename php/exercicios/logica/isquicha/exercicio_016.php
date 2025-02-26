<?php

// Estruturas sequenciais
// Exercicio 016
/* 
Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho 
em metros quadrados da área a ser pintada.

Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados 
e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00.

Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.
*/
$tamanhoAreaMetrosQuadrados = 54; // m²
$coberturaTintaPorLitro = 3; // m²
$litrosPorLataTinta = 18; // litros
$valorPorLataTinta = 80.00; // R$80

// 1 lata (18l) = 54m² pra pintar
$quantidadeLatas = $tamanhoAreaMetrosQuadrados / $coberturaTintaPorLitro;
$valorTotal = $quantidadeLatas * $valorPorLataTinta;

echo 'Tamanho da área: ' . number_format($tamanhoAreaMetrosQuadrados, 2, '.', ',') . ' m²<br>';
echo 'Cobertura da tinta: ' . $coberturaTintaPorLitro . ' litros / m² <br>';
echo 'Litros por lata de tinta: ' . $litrosPorLataTinta . ' litros / m² <br>';
echo 'Valor por lata de tinta: R$ ' . number_format($valorPorLataTinta, 2, ',', '.') . '<br>';
echo '<hr>';
echo 'Quantidade de latas a serem compradas: ' . $quantidadeLatas . ' latas <br>';
echo 'Preço total: R$ ' . number_format($valorTotal, 2, ',', '.') . '<br>';
