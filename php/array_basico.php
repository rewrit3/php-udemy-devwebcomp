<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    echo '// sequenciais';
    // $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
    $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];
    $lista_frutas[] = 'Abacaxi';

    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<br>';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    echo '<br>';
    echo $lista_frutas[2];
    
    echo '<hr>';

    echo '// associativos';
    $lista_frutas = [
      'a' => 'Banana', 
      'b' => 'Maça', 
      'c' => 'Morango', 
      'd' => 'Uva',
      2 => 'Abacaxi',
    ];
    $lista_frutas['z'] = 'Amora';
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<br>';
    echo $lista_frutas['z'];
  ?>
</body>
</html>