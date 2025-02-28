<?php

// Estruturas sequenciais
// Exercicio 017
/* 
Faça um Programa para uma loja de tintas.

O programa deverá pedir o tamanho em metros quadrados da área a ser pintada.

Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados 
e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 
ou em galões de 3,6 litros, que custam R$ 25,00.

Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações:
  - comprar apenas latas de 18 litros;
  - comprar apenas galões de 3,6 litros;
  - misturar latas e galões, de forma que o preço seja o menor.
    
Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias.
*/
$tamanhoAreaMetrosQuadrados = 220; // m²
$coberturaTintaMetroPorLitro = 6; // m²
$litrosPorLataTinta = 18; // litros
$valorPorLataTinta = 80.00; // R$80
$litrosPorGalaoTinta = 3.6; // litros
$valorPorGalaoTinta = 25.00; // R$25

// 1 litro pinta 6m²
// 1 lata tem 18 litros
// 108m² pra pintar - 108 / 6 = 18 (litros)
// 18 litros = 1 lata - litros / litros por lata
$quantidadeLitros = $tamanhoAreaMetrosQuadrados / $coberturaTintaMetroPorLitro;
$quantidadeLatas = $quantidadeLitros / $litrosPorLataTinta;
$quantidadeGaloes = $quantidadeLitros / $litrosPorGalaoTinta;

$valorTotalLatas = $quantidadeLatas * $valorPorLataTinta;
$valorTotalGaloes = $quantidadeGaloes * $valorPorGalaoTinta;

echo 'Tamanho da área: ' . number_format($tamanhoAreaMetrosQuadrados, 2, '.', ',') . ' m²<br>';
echo 'Cobertura da tinta: ' . $coberturaTintaMetroPorLitro . ' litros / m² <br>';
echo 'Litros por lata de tinta: ' . $litrosPorLataTinta . ' litros / m² <br>';
echo 'Valor por lata de tinta: R$ ' . number_format($valorPorLataTinta, 2, ',', '.') . '<br>';
echo 'Litros por galão de tinta: ' . $litrosPorGalaoTinta . ' litros / m² <br>';
echo 'Valor por galão de tinta: R$ ' . number_format($valorPorGalaoTinta, 2, ',', '.') . '<br>';
echo '<hr>';
echo 'Situação 1: comprar apenas latas de 18 litros <br>';
echo '- Quantidade de litros necessários: ' . number_format($quantidadeLitros, 2, ',', '.') . ' litro(s) <br>';
echo '- Quantidade de latas a serem compradas: ' . number_format($quantidadeLatas, 0, ',', '.') . ' lata(s) <br>';
echo '- Preço total: R$ ' . number_format($valorTotalLatas, 2, ',', '.') . '<br>';
echo '<hr>';
echo 'Situação 2: comprar apenas galões de 3,6 litros <br>';
echo '- Quantidade de litros necessários: ' . number_format($quantidadeLitros, 2, ',', '.') . ' litro(s) <br>';
echo '- Quantidade de galões a serem comprados: ' . number_format($quantidadeGaloes, 0, ',', '.') . ' galão(s) <br>';
echo '- Preço total: R$ ' . number_format($valorTotalGaloes, 2, ',', '.') . '<br>';
