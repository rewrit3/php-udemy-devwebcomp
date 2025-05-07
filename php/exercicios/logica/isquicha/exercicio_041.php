<?php
// Estruturas de decisão
// Exercicio 041
/* 
  Faça um Programa que leia 2 números e em seguida pergunte ao usuário 
  qual operação ele deseja realizar.

  O resultado da operação deve ser acompanhado de uma frase que diga se o número é: 
  par ou ímpar; positivo ou negativo; inteiro ou decimal.
*/
?>

<form
  action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_041.php"
  method="post">

  <label for="number_1">Número 1:</label>
  <br>
  <input
    type="text"
    name="number_1"
    id="number_1"
    placeholder="Digite o número 1"
    style="width: 250px;"
    required>

  <br>
  <br>

  <label for="number_2">Número 2:</label>
  <br>
  <input
    type="text"
    name="number_2"
    id="number_2"
    placeholder="Digite o número 2"
    style="width: 250px;"
    required>

  <br>
  <br>

  <label for="operation">Operação:</label>
  <br>
  <select name="operation" id="operation">
    <option value="add">Adição (+)</option>
    <option value="subtract">Subtração (-)</option>
    <option value="multiply">Multiplicação (*)</option>
    <option value="divide">Divisão (/)</option>
  </select>

  <br>
  <br>

  <button type="submit">Enviar</button>
</form>

<hr>

<?php
function checkResultPositiveNegative($result) {
  if (!is_numeric($result)) {
    return "A entrada '$result' não é um número válido.";
  }

  if ($result == 0):
    return 'Positivo';
  elseif ($result > 0):
    return 'Positivo';
  elseif ($result < 0):
    return 'Negativo';
  endif;
}

function checkResultType($result) {
  if (!is_numeric($result)) {
    return "A entrada '$result' não é um número válido.";
  }

  $completePart = intval($result);

  if ($result == $completePart):
    return 'Inteiro.';
  else:
    return 'Decimal.';
  endif;
}

function checkResultEvenOdd($result) {
  if (!is_numeric($result)) {
    return "A entrada '$result' não é um número válido.";
  }

  $completePart = intval($result);

  if ($result == $completePart):
    return ($result % 2 === 0) ? 'Par.' : 'Ímpar.';
  else:
    return 'O número é Decimal e não pode ser classificado como Par ou Ímpar.';
  endif;
}

if (isset($_POST['number_1']) and isset($_POST['number_2']) and isset($_POST['operation'])):
  $number1 = isset($_POST['number_1']) ? (float) $_POST['number_1'] : null;
  $number2 = isset($_POST['number_2']) ? (float) $_POST['number_2'] : null;
  $operation = isset($_POST['operation']) ? $_POST['operation'] : null;
  $operationText = '';
  $symbol = '';
  $result = null;
  $error = null;

  if ($number1 !== null && $number2 !== null && $operation !== null):
    switch ($operation) {
      case 'add':
        $result = $number1 + $number2;
        $operationText = 'adição';
        $symbol = '+';
        break;

      case 'subtract':
        $result = $number1 - $number2;
        $operationText = 'subtração';
        $symbol = '-';
        break;

      case 'multiply':
        $result = $number1 * $number2;
        $operationText = 'multiplicação';
        $symbol = '*';
        break;

      case 'divide':
        if ($number2 != 0):
          $result = $number1 / $number2;
          $operationText = 'divisão';
          $symbol = '/';
        else:
          echo "<p style='color:red;'>Erro: Divisão por zero não é permitida.</p>";
          $error = true;
        endif;
        break;

      default:
        echo "<p style='color:red;'>Erro: Operação inválida.</p>";
        $error = true;
    }

    if (!$error && $result !== null):
      echo "Resultado da $operationText: $number1 $symbol $number2 = $result <br>";
      echo "Positivo/Negativo: " . checkResultPositiveNegative($result) . "<br>";
      echo "Inteiro/Decimal: " . checkResultType($result) . "<br>";
      echo "Par/Ímpar: " . checkResultEvenOdd($result) . "<br>";
    endif;
  endif;
endif;
?>