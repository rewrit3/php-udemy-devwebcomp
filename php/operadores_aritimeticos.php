<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $num1 = 13;
    $num2 = 4;

    echo "O resultado da soma entre $num1 e $num2 é: " . ($num1 + $num2);
    echo '<br>';
    echo "O resultado da subtração entre $num1 e $num2 é: " . ($num1 - $num2);
    echo '<br>';
    echo "O resultado da multiplicação entre $num1 e $num2 é: " . ($num1 * $num2);
    echo '<br>';
    echo "O resultado da divisão entre $num1 e $num2 é: " . ($num1 / $num2);
    echo '<br>';
    echo "O módulo entre $num1 e $num2 é: " . ($num1 % $num2);
    echo '<br>';
  ?>
</body>
</html>