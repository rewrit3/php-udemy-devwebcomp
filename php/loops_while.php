<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $num1 = 1;
    while ($num1 < 50):
      echo $num1 . '<br>';

      $num1 += 5;

      break;
    endwhile;
    
    echo '<hr>';

    $num2 = 1;
    while (true):
      echo $num2 . '<br>';

      // $num2 += 5;
      $num2++;

      if ($num2 > 100):
        break;
      endif;
    endwhile;

    echo '<hr>';

    $num3 = 1;
    while ($num3 < 10):
      $num3 += 1;

      if ($num3 == 2 or $num3 == 6):
        continue;
      endif;

      echo $num3 . '<br>';
    endwhile;
  ?>
</body>
</html>