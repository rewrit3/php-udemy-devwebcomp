<?php

// Estruturas sequenciais
// Exercicio 009
// Faça um Programa que peça a temperatura em graus Farenheit, transforme e 
// mostre a temperatura em graus Celsius. C = (5 * (F-32) / 9).
// "10 – 32 = 8 : 1,8 = 4,4 ºC"
$temperatureInFahrenheit = 104;
$temperatureInCelsius = (5 * ($temperatureInFahrenheit - 32) / 9);

echo 'A temperatura ' . $temperatureInFahrenheit . 'F convertida em Celsius é: ' . number_format($temperatureInCelsius, 2, ',', '.');
