<?php
// Estruturas de decisão
// Exercicio 037
/* 
  Faça um Programa que leia um número inteiro maior que 0 e menor que 1000 
  e imprima a quantidade de centenas, dezenas e unidades do mesmo.

  Observando os termos no plural a colocação do "e", da vírgula entre outros.

  Exemplo: 326 = 3 centenas, 2 dezenas e 6 unidades 12 = 1 dezena e 2 unidades

  Testar com:
  326, 300, 100, 320, 310,305, 301, 101, 311, 111, 25, 20, 10, 21, 11, 1, 7 e 16
*/
if (isset($_POST['number'])):
  $number = $_POST['number'];

  if ($number % 100 === 0):
    $result = $number / 100;
  else:
    $modulo = $number % 100;
    $numero = $number - $modulo;
    $result = $numero;
  endif;

  $message = "$number = $result centenas";
endif;
?>

<form action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_037.php" method="post">
  <label for="number">Digite o número:</label>
  <br>
  <input
    type="text"
    name="number"
    id="number"
    placeholder="Digite o número"
    style="width: 250px;"
    required>
  <br>
  <br>
  <button type="submit">Enviar</button>
</form>

<hr>

<?php
if (isset($_POST['number'])):
  echo $message;
endif;
?>