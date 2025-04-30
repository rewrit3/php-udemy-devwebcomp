<?php
// Estruturas de decisão
// Exercicio 035
/* 
  Faça um Programa que peça um número correspondente a um determinado ano 
  e em seguida informe se este ano é ou não bissexto.
*/
function isLeapYear(int $year): bool {
  return (($year % 4 === 0) and ($year % 100 !== 0)) or ($year % 400 === 0);
}

if (isset($_POST['year'])):
  $year = $_POST['year'];

  if (isLeapYear($year)):
    $message = "$year é/foi um ano bissexto.";
  else:
    $message = "$year não é/foi um ano bissexto.";
  endif;
endif;
?>

<form action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_035.php" method="post">
  <label for="year">Digite o ano:</label>
  <br>
  <input
    type="text"
    name="year"
    id="year"
    placeholder="Digite o ano"
    style="width: 250px;"
    required>
  <br>
  <br>
  <button type="submit">Enviar</button>
</form>

<hr>

<?php
if (isset($_POST['year'])):
  echo $message;
endif;
?>