<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    // $valor1 = 15.35;
    // $valor2 = (int) $valor1;
    // $valor3 = (string) $valor1;

    // $valor1 = '15.35';
    // $valor2 = (int) $valor1;
    // $valor3 = (double) $valor1;
    // $valor4 = (boolean) $valor1;

    $valor1 = false;
    $valor2 = (int) $valor1;
    $valor3 = (double) $valor1;

    echo $valor1 . ': ' . gettype($valor1);
    echo '<br>';
    echo $valor2 . ': ' . gettype($valor2);
    echo '<br>';
    echo $valor3 . ': ' . gettype($valor3);
    // echo '<br>';
    // echo $valor4 . ': ' . gettype($valor4);
    ?>
</body>
</html>