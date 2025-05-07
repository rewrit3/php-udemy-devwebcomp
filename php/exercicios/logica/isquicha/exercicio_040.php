<?php
// Estruturas de decisão
// Exercicio 040
/* 
  Faça um Programa que peça um número e informe se o número é inteiro ou decimal. 
  Dica: utilize uma função de arredondamento.
*/
function checkNumberType($number) {
  if (!is_numeric($number)) {
    return "A entrada '$number' não é um número válido.";
  }

  $completePart = intval($number);

  if ($number == $completePart):
    return "O número {$number} é INTEIRO.";
  else:
    return "O número {$number} é DECIMAL.";
  endif;
}

if (isset($_POST['number'])):
  $typedNumber = $_POST['number'];
endif;
?>

<form
  action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_040.php"
  method="post">

  <label for="number">Digite o valor:</label>
  <br>
  <input
    type="text"
    name="number"
    id="number"
    placeholder="Digite o valor"
    style="width: 250px;"
    required>

  <br>
  <br>

  <button type="submit">Enviar</button>
</form>

<hr>

<?php
if (isset($_POST['number'])):
  echo checkNumberType($typedNumber) . "<br>";
endif;
?>