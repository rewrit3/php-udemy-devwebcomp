<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    // $registros = [
    //   'Título 1',
    //   'Título 2',
    //   'Título 3',
    // ];

    $registros = [
      [
        'titulo' => 'Título 1',
        'conteudo' => 'Conteúdo 1'
      ],
      [
        'titulo' => 'Título 2',
        'conteudo' => 'Conteúdo 2'
      ],
      [
        'titulo' => 'Título 3',
        'conteudo' => 'Conteúdo 3'
      ],
      [
        'titulo' => 'Título 4',
        'conteudo' => 'Conteúdo 4'
      ],
    ];

    echo '<pre>';
    print_r($registros);
    echo '</pre>';

    echo '<hr>';
    echo '<hr>';

    echo '// while <br>';
    $x = 0;
    while ($x < count($registros)):
      echo $registros[$x]['titulo'];
      echo '<br>';
      echo $registros[$x]['conteudo'];
      echo '<hr>';

      $x++;
    endwhile;

    echo '<hr>';

    echo '// do-while <br>';
    $y = 0;
    do {
      echo $registros[$y]['titulo'];
      echo '<br>';
      echo $registros[$y]['conteudo'];
      echo '<hr>';

      $y++;
    } while ($y < count($registros));

    echo '<hr>';

    echo '// for <br>';
    for ($z = 0; $z < count($registros); $z++):
      echo $registros[$z]['titulo'];
      echo '<br>';
      echo $registros[$z]['conteudo'];
      echo '<hr>';
    endfor;
  ?>
</body>
</html>