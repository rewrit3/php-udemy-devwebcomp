<?php

// Estruturas de decisão
// Exercicio 030
/* 
  Faça um programa para o cálculo de uma folha de pagamento, 
  sabendo que os descontos são do Imposto de Renda, que depende do salário bruto (conforme tabela abaixo) 
  e 10% para o INSS e que o FGTS corresponde a 11% do Salário Bruto, 
  mas não é descontado (é a empresa que deposita).

  O Salário Líquido corresponde ao Salário Bruto menos os descontos. 
  O programa deverá pedir ao usuário o valor da sua hora e a quantidade de horas trabalhadas no mês.

  Desconto do IR: 
    Salário Bruto até 900 (inclusive) - isento 
    Salário Bruto até 1500 (inclusive) - desconto de 5% 
    Salário Bruto até 2500 (inclusive) - desconto de 10% 
    Salário Bruto acima de 2500 - desconto de 20%

  Imprima na tela as informações, dispostas conforme o exemplo abaixo. 
  No exemplo o valor da hora é 5 e a quantidade de hora é 220.

    Salário Bruto: (5 * 220)        : R$ 1100,00
    (-) IR (5%)                     : R$   55,00
    (-) INSS ( 10%)                 : R$  110,00
    FGTS (11%)                      : R$  121,00
    Total de descontos              : R$  165,00
    Salário Liquido                 : R$  935,00
*/

if (isset($_POST['valor_hora']) and isset($_POST['quantidade_horas'])):
  $valorHora = $_POST['valor_hora'];
  $quantidadeHoras = $_POST['quantidade_horas'];

  $salarioBruto = $valorHora * $quantidadeHoras;

  $descontoINSS = 10;
  $descontoFGTS = 11;

  if ($salarioBruto <= '900'):
    $descontoIR = 0;
  elseif ($salarioBruto >= '900' and $salarioBruto < '1500'):
    $descontoIR = 5;
  elseif ($salarioBruto >= '1500' and $salarioBruto <= '2500'):
    $descontoIR = 10;
  elseif ($salarioBruto > '2500'):
    $descontoIR = 20;
  endif;

  $valorDescontoIR = ($salarioBruto * $descontoIR) / 100;
  $valorDescontoINSS = ($salarioBruto * $descontoINSS) / 100;
  $valorDescontoFGTS = ($salarioBruto * $descontoFGTS) / 100;

  $salarioLiquidoDescontoIR = $salarioBruto - $valorDescontoIR;
  $salarioLiquidoDescontoINSS = $salarioBruto - $valorDescontoINSS;
  $salarioLiquidoDescontoFGTS = $salarioBruto - $valorDescontoFGTS;
endif;

?>

<form action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_030.php" method="post">
  <label for="valor_hora">Valor por hora</label>
  <br>
  <input type="text" name="valor_hora" id="valor_hora" placeholder="Digite o valor por hora" style="width: 250px;">

  <br>
  <br>

  <label for="quantidade_horas">Quantidade de horas</label>
  <br>
  <input type="number" name="quantidade_horas" id="quantidade_horas" placeholder="Digite a quantidade de horas" style="width: 250px;">

  <br>
  <br>

  <button type="submit">Enviar</button>
</form>

<hr>

<?php
if (isset($_POST['valor_hora']) and isset($_POST['quantidade_horas'])):
  echo "Salário Bruto ($valorHora * $quantidadeHoras): R$  " . number_format($salarioBruto, 2, ',', '.') . "<br>";
  echo "(-) IR ($descontoIR %): R$  " . number_format($salarioLiquidoDescontoIR, 2, ',', '.') . "<br>";
  echo "(-) INSS ($descontoINSS %): R$  " . number_format($salarioLiquidoDescontoINSS, 2, ',', '.') . "<br>";
endif;
?>