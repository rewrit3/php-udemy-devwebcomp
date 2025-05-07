<?php
// Estruturas de decisão
// Exercicio 038
/* 
  Faça um Programa para um caixa eletrônico.

  O programa deverá perguntar ao usuário a valor do saque 
  e depois informar quantas notas de cada valor serão fornecidas.

  As notas disponíveis serão as de 1, 5, 10, 50 e 100 reais. 
  O valor mínimo é de 10 reais e o máximo de 600 reais.

  O programa não deve se preocupar com a quantidade de notas existentes na máquina.

  Exemplo 1: 
    Para sacar a quantia de 256 reais, o programa fornece duas notas de 100, 
    uma nota de 50, uma nota de 5 e uma nota de 1;

  Exemplo 2: 
    Para sacar a quantia de 399 reais, o programa fornece três notas de 100, 
    uma nota de 50, quatro notas de 10, uma nota de 5 e quatro notas de 1.
*/
function decomposeValue($value) {
  if ($value < 10 or $value > 600):
    return 'Valor inválido. Por favor, digite um valor entre 10 e 600.';
  endif;

  // 1, 5, 10, 50 e 100
  $hundred = intdiv($value, 100);
  $hundredRest = $value % 100;
  $fifty = intdiv($hundredRest, 50);
  $fiftyRest = $hundredRest % 50;
  $ten = intdiv($fiftyRest, 10);
  $tenRest = $hundredRest % 10;
  $five = intdiv($tenRest, 5);
  $fiveRest = $hundredRest % 5;
  $one = intdiv($fiveRest, 1);

  return [
    'hundred' => $hundred,
    'fifty' => $fifty,
    'ten' => $ten,
    'five' => $five,
    'one' => $one,
  ];
}

if (isset($_POST['value'])):
  $typedValue = $_POST['value'];

  $result = decomposeValue($typedValue);
endif;
?>

<form
  action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_038.php"
  method="post">

  <label for="value">Digite o valor:</label>
  <br>
  <input
    type="text"
    name="value"
    id="value"
    placeholder="Digite o valor"
    style="width: 250px;"
    required>

  <br>
  <br>

  <button type="submit">Enviar</button>
</form>

<hr>

<?php
if (isset($_POST['value'])):
  echo "O valor R$ $typedValue irá fornecer: <br>";
  echo $result['hundred'] . " nota(s) de 100 <br>";
  echo $result['fifty'] . " nota(s) de 50 <br>";
  echo $result['ten'] . " nota(s) de 10 <br>";
  echo $result['five'] . " nota(s) de 5 <br>";
  echo $result['one'] . " nota(s) de 1 <br>";
endif;
?>