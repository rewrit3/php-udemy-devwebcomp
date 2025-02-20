<?php

// Estruturas sequenciais
// Exercicio 015
/* 
Faça um Programa que pergunte quanto você ganha por hora e o número de horas 
trabalhadas no mês.

Calcule e mostre o total do seu salário no referido mês, sabendo-se que são 
descontados 11% para o Imposto de Renda, 8% para o INSS e 5% para o sindicato, 
faça um programa que nos dê: 
- salário bruto. 
- quanto pagou ao INSS. 
- quanto pagou ao sindicato. 
- o salário líquido. 
- calcule os descontos e o salário líquido, conforme a tabela abaixo: 

+ Salário Bruto : R$
- IR (11%) : R$
- INSS (8%) : R$
- Sindicato ( 5%) : R$
= Salário Liquido : R$
*/
$salarioPorHora = 16.00;
$horasTrabalhadasPorMes = 220;
$porcentagemIR = 11;
$porcentagemINSS = 8;
$porcentagemSindicato = 5;

$salarioBruto = $salarioPorHora * $horasTrabalhadasPorMes;
$descontoIR = $salarioBruto * ($porcentagemIR / 100);
$descontoINSS = $salarioBruto * ($porcentagemINSS / 100);
$descontoSindicato = $salarioBruto * ($porcentagemSindicato / 100);
$salarioLiquido = $salarioBruto - ($descontoIR + $descontoINSS + $descontoSindicato);

echo 'Salário por hora: R$' . number_format($salarioPorHora, 2, ',', '.') . '<br>';
echo 'Quantidade de horas trabalhadas por mês: ' . $horasTrabalhadasPorMes . ' horas <br>';
echo '<hr>';
echo 'Salário Bruto: R$' . number_format($salarioBruto, 2, ',', '.') . '<br>';
echo 'Valor pago ao IR: R$' . number_format($descontoIR, 2, ',', '.') . '<br>';
echo 'Valor pago ao INSS: R$' . number_format($descontoINSS, 2, ',', '.') . '<br>';
echo 'Valor pago ao Sindicato: R$' . number_format($descontoSindicato, 2, ',', '.') . '<br>';
echo 'Salário Líquido: R$' . number_format($salarioLiquido, 2, ',', '.') . '<br>';
