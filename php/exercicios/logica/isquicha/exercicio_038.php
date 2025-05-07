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
  // $ten = $hundredsRest % 10;
  // $units = $hundredsRest % 10;
  echo $fiftyRest;
  exit;

  return [
    'hundred' => $hundred,
    'fifty' => $fifty,
    'ten' => $ten,
    // 'units' => $units,
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
  echo "O valor R$ $typedValue irá fornecer:\n";
  echo $result['hundred'] . " notas de 100,\n";
  echo $result['fifty'] . " notas de 50,\n";
  echo $result['ten'] . " notas de 10,\n";
// echo $result['units'] . " unidades.\n";
endif;
?>