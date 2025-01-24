<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $funcionarios = [
      ['nome' => 'João', 'salario' => 2000, 'data_nascimento' => '24/01/2025'],
      ['nome' => 'Maria', 'salario' => 2200],
      ['nome' => 'José', 'salario' => 2400],
    ];

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    foreach ($funcionarios as $idx => $funcionario):
      foreach ($funcionario as $i => $valor):
        echo "$i - $valor <br>";
      endforeach;

      echo '<hr>';
    endforeach;
  ?>
</body>
</html>