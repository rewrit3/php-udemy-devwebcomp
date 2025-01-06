<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h3>Pós-incremento</h3>
  <?
    $a = 7;

    echo "O valor contido em a é: $a <br>";
    echo 'O valor contido em a pós-incremento é: ' . $a++ . '<br>';
    echo "O valor atualizado contido em a é: $a <br>";
  ?>

  <h3>Pré-incremento</h3>
  <?
    $a = 7;

    echo "O valor contido em a é: $a <br>";
    echo 'O valor contido em a pré-incremento é: ' . ++$a . '<br>';
    echo "O valor atualizado contido em a é: $a <br>";
  ?>

  <hr>

  <h3>Pós-decremento</h3>
  <?
    $a = 7;

    echo "O valor contido em a é: $a <br>";
    echo 'O valor contido em a pós-decremento é: ' . $a-- . '<br>';
    echo "O valor atualizado contido em a é: $a <br>";
  ?>

  <h3>Pré-decremento</h3>
  <?
    $a = 7;

    echo "O valor contido em a é: $a <br>";
    echo 'O valor contido em a pré-decremento é: ' . --$a . '<br>';
    echo "O valor atualizado contido em a é: $a <br>";
  ?>
</body>
</html>