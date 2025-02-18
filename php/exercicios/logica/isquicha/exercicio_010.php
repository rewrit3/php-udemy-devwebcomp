<?php

// Estruturas sequenciais
// Exercicio 010
// Faça um Programa que peça a temperatura em graus Celsius, transforme 
// e mostre em graus Fahrenheit.
// (X°C × 9/5) + 32 = Y°F
$temperatureInCelsius = 40;
$temperatureInFahrenheit = ($temperatureInCelsius * (9 / 5)) + 32;

echo 'A temperatura ' . $temperatureInCelsius . 'Cº convertida em Fahrenheit é: ' . number_format($temperatureInFahrenheit, 2, ',', '.');
