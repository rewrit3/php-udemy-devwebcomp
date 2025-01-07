<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $texto = 'Curso Completo de PHP <br>';
    echo $texto;

    echo strtolower($texto);
    echo strtoupper($texto);
    echo ucfirst($texto);
    echo strlen($texto) . '<br>';
    echo str_replace('PHP', 'JavaScript', $texto);
    echo substr($texto, 6, 8);
  ?>
</body>
</html>