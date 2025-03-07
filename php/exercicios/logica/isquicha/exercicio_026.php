<?php

// Estruturas de decisão
// Exercicio 026
/* 
  Faça um programa que pergunte o preço de três produtos 
  e informe qual produto você deve comprar, sabendo que 
  a decisão é sempre pelo mais barato.
*/
$precoProduto1 = 100.10;
$precoProduto2 = 100.00;
$precoProduto3 = 100.20;

$menorPreco = $precoProduto1; // Assume que o primeiro é o menor inicialmente
$nomeProduto = 'Produto 1';

if ($precoProduto2 < $menorPreco):
  $menorPreco = $precoProduto2;
  $nomeProduto = 'Produto 2';
endif;

if ($precoProduto3 < $menorPreco):
  $menorPreco = $precoProduto3;
  $nomeProduto = 'Produto 3';
endif;

echo 'Preço do produto 1: R$ ' . number_format($precoProduto1, 2, ',', '.') . '<br>';
echo 'Preço do produto 2: R$ ' . number_format($precoProduto2, 2, ',', '.') . '<br>';
echo 'Preço do produto 3: R$ ' . number_format($precoProduto3, 2, ',', '.') . '<br>';
echo '<br>';
echo 'O produto recomendado com menor preço é: ' . $nomeProduto . ' > R$ ' . number_format($menorPreco, 2, ',', '.') . '.';
