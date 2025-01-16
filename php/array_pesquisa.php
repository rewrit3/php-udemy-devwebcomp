<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];
    $lista_pessoas = ['João', 'Maria', 'José'];

    // echo '<pre>';
    // var_dump($lista_frutas);
    // echo '</pre>';

    // echo in_array('Morango', $lista_frutas);
    // echo '<br>';
    // echo array_search('Morango', $lista_frutas);

    // echo '<hr>';

    $lista_coisas = [
      'frutas' => $lista_frutas,
      'pessoas' => $lista_pessoas,
    ];

    echo '<pre>';
    var_dump($lista_coisas);
    echo '</pre>';

    echo in_array('Morango', $lista_coisas['frutas']);
    echo '<br>';
    echo array_search('Morango', $lista_coisas['frutas']);
    echo '<hr>';
    echo in_array('José', $lista_coisas['pessoas']);
    echo '<br>';
    echo array_search('José', $lista_coisas['pessoas']);
  ?>
</body>
</html>