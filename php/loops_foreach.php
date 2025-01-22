<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $itens = [
      'sofa',
      'mesa',
      'cadeira',
      'fogão',
      'geladeira',
    ];

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    echo '<hr>';

    foreach ($itens as $item):
      echo "$item";

      if ($item == 'mesa'):
        echo ' (* Compre uma mesa e leve 4 cadeiras)';
      endif;

      echo '<br>';
    endforeach;
  ?>
</body>
</html>