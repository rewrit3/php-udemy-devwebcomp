<?php

// Estruturas de decisão
// Exercicio 029
/* 
  As Organizações Tabajara resolveram dar um aumento de salário 
  aos seus colaboradores e lhe contrataram para desenvolver o programa 
  que calculará os reajustes.

  Faça um programa que recebe o salário de um colaborador 
  e o reajuste segundo o seguinte critério, baseado no salário atual:

  - salários até R$ 280,00 (incluindo) : aumento de 20%
  - salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
  - salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
  - salários de R$ 1500,00 em diante:
    aumento de 5% Após o aumento ser realizado,
  
  informe na tela:
    - o salário antes do reajuste;
    - o percentual de aumento aplicado;
    - o valor do aumento;
    - o novo salário, após o aumento.
*/
if (isset($_POST['salario'])):
  $salarioAntesReajuste = $_POST['salario'];

  if ($salarioAntesReajuste <= '280'):
    $percentualAumento = 20;
    $salarioDepoisReajuste = $salarioAntesReajuste * 1.20;
    $valorAumento = $salarioDepoisReajuste - $salarioAntesReajuste;

  elseif ($salarioAntesReajuste > '280' and $salarioAntesReajuste <= '700'):
    $percentualAumento = 15;
    $salarioDepoisReajuste = $salarioAntesReajuste * 1.15;
    $valorAumento = $salarioDepoisReajuste - $salarioAntesReajuste;

  elseif ($salarioAntesReajuste > '700' and $salarioAntesReajuste <= '1500'):
    $percentualAumento = 10;
    $salarioDepoisReajuste = $salarioAntesReajuste * 1.10;
    $valorAumento = $salarioDepoisReajuste - $salarioAntesReajuste;

  elseif ($salarioAntesReajuste > '1500'):
    $percentualAumento = 5;
    $salarioDepoisReajuste = $salarioAntesReajuste * 1.05;
    $valorAumento = $salarioDepoisReajuste - $salarioAntesReajuste;
  endif;
endif;

?>

<form action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_029.php?salario" method="post">
  <label for="salario">Salário</label>
  <br>
  <input type="number" name="salario" id="salario" placeholder="Digite o seu salário" style="width: 250px;">
  <button type="submit">Enviar</button>
</form>

<hr>

<?php
if (isset($_POST['salario'])):
  echo 'Salário antes do reajuste: R$ ' . number_format($salarioAntesReajuste, 2, ',', '.') . '<br>';
  echo 'Percentual de aumento aplicado: ' . $percentualAumento . ' % <br>';
  echo 'Valor do aumento: R$ ' . number_format($valorAumento, 2, ',', '.') . '<br>';
  echo 'Salário depois do reajuste: R$ ' . number_format($salarioDepoisReajuste, 2, ',', '.') . '<br>';
endif;
?>