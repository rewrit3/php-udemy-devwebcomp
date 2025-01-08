<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $num = 7.4;

    echo '$num: ' . $num . '<br>';
    echo 'ceil: ' . ceil($num) . '<br>';
    echo 'floor: ' . floor($num) . '<br>';
    echo 'round: ' . round($num) . '<br>';
    echo 'rand: ' . rand(1, 10) . '<br>';
    // echo getrandmax();
    echo 'sqrt: ' . sqrt($num) . '<br>';
  ?>
</body>
</html>