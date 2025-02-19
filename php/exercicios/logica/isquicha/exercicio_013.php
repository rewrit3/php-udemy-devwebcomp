<?php

// Estruturas sequenciais
// Exercicio 013
// Tendo como dado de entrada a altura (h) de uma pessoa, construa um algoritmo 
// que calcule seu peso ideal, utilizando as seguintes fórmulas: 
// - Para homens: (72.7h) - 58 
// - Para mulheres: (62.1h) - 44.7
$altura = 1.82;
$pesoIdealHomem = (72.7 * $altura) - 58;
$pesoIdealMulher = (62.1 * $altura) - 44.7;

echo 'O peso ideal de um homem com altura de ' . $altura . ' é: ' . $pesoIdealHomem;
echo '<br>';
echo 'O peso ideal de uma mulher com altura de ' . $altura . ' é: ' . $pesoIdealMulher;
