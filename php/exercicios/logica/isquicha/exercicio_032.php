<?php
// Estruturas de decisão
// Exercicio 032
/* 
  Faça um programa que lê as duas notas parciais obtidas por um aluno numa 
  disciplina ao longo de um semestre, e calcule a sua média.

  A atribuição de conceitos obedece à tabela abaixo: 
  # Média de Aproveitamento 
    Conceito 
    - Entre 9.0 e 10.0: A 
    - Entre 7.5 e 9.0: B 
    - Entre 6.0 e 7.5: C 
    - Entre 4.0 e 6.0: D 
    - Entre 4.0 e zero: E

  O algoritmo deve mostrar na tela as notas, a média, o conceito correspondente 
  e a mensagem “APROVADO” se o conceito for A, B ou C ou 
  “REPROVADO” se o conceito for D ou E.
*/
if (isset($_POST['nota_1']) and isset($_POST['nota_2'])):
  $nota1 = $_POST['nota_1'];
  $nota2 = $_POST['nota_2'];

  $media = ($nota1 + $nota2) / 2;

  switch (true):
    case ($media >= 9 and $media <= 10):
      $conceito = 'A';
      break;

    case ($media >= 7.5 and $media <= 9):
      $conceito = 'B';
      break;

    case ($media >= 6 and $media <= 7.5):
      $conceito = 'C';
      break;

    case ($media >= 4 and $media <= 6):
      $conceito = 'D';
      break;

    case ($media >= 0 and $media <= 4):
      $conceito = 'E';
      break;
  endswitch;

  if ($conceito == 'A' or $conceito == 'B' or $conceito == 'C'):
    $mensagem = 'Aprovado';
  elseif ($conceito == 'D' or $conceito == 'E'):
    $mensagem = 'Reprovado';
  endif;
endif;
?>

<form action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_032.php" method="post">
  <label for="nota_1">Digite a primeira nota:</label>
  <br>
  <input
    type="text"
    name="nota_1"
    id="nota_1"
    placeholder="Digite a primeira nota"
    style="width: 250px;"
    required>
  <br>
  <br>
  <label for="nota_2">Digite a segunda nota:</label>
  <br>
  <input
    type="text"
    name="nota_2"
    id="nota_2"
    placeholder="Digite a segunda nota"
    style="width: 250px;"
    required>
  <br>
  <br>
  <button type="submit">Enviar</button>
</form>

<hr>

<?php
if (isset($_POST['nota_1']) and isset($_POST['nota_2'])):
  echo "Notas do aluno: " . number_format($nota1, 2, '.', ',') . " - " . number_format($nota2, 2, '.', ',') . "<br>";
  echo "Média do aluno: " . number_format($media, 2, '.', ',') . "<br>";
  echo "Situação: $mensagem";
endif;
?>