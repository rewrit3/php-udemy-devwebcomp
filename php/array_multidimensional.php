<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $lista_coisas = [];
    // sequencial
    // $lista_coisas['frutas'] = ['Banana', 'Maça', 'Morango', 'Uva'];
    // $lista_coisas['pessoas'] = ['João', 'Maria', 'José'];
    // associativo
    $lista_coisas['frutas'] = [
      1 => 'Banana', 
      2 => 'Maça', 
      3 => 'Morango', 
      4 => 'Uva',
    ];

    $lista_coisas['pessoas'] = [
      1 => 'João', 
      2 => 'Maria', 
      3 => 'José', 
    ];

    echo '<pre>';
    var_dump($lista_coisas);
    echo '</pre>';

    echo '<hr>';

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo '<hr>';

    echo $lista_coisas['frutas'][3];
    echo '<br>';
    echo $lista_coisas['pessoas'][1];
  ?>
</body>
</html>