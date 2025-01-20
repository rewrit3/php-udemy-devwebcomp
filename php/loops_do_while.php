<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $x = 10;

    do {
      echo 'Entrou no do while.';
    } while ($x < 9);

    while ($x < 9):
      echo 'Entrou no while.';
    endwhile;

    echo '<hr>';

    $x = 1;

    do {
      echo "x = $x <br>";

      $x++;
    } while ($x < 9);
  ?>
</body>
</html>