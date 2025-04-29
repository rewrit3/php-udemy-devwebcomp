<?php
// Estruturas de decisão
// Exercicio 031
/* 
  Faça um Programa que leia um número e exiba o dia correspondente da semana. 
  (1-Domingo, 2- Segunda, etc.)
  - Se digitar outro valor deve aparecer valor inválido.
*/
if (isset($_POST['numero'])):
  $numero = $_POST['numero'];
  $dia = '';

  switch ($numero) {
    case 1:
      $dia = 'Domingo';
      break;

    case 2:
      $dia = 'Segunda';
      break;

    case 3:
      $dia = 'Terça';
      break;

    case 4:
      $dia = 'Quarta';
      break;

    case 5:
      $dia = 'Quinta';
      break;

    case 6:
      $dia = 'Sexta';
      break;

    case 7:
      $dia = 'Sábado';
      break;

    default:
      $dia = 'Número inválido';
      break;
  }
endif;
?>

<form action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_031.php" method="post">
  <label for="numero">Digite um número:</label>
  <br>
  <input type="number" name="numero" id="numero" placeholder="Digite um número" style="width: 250px;">
  <br>
  <br>
  <button type="submit">Enviar</button>
</form>

<hr>

<?php
if (isset($_POST['numero'])):
  echo "O dia da semana correspondente ao número escolhido ($numero) é: $dia";
endif;
?>