<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    echo date('d/m/Y - H:i');
    echo '<br>';
    date_default_timezone_set('America/Cuiaba');
    echo date_default_timezone_get();
    echo '<br>';
    echo date('d/m/Y - H:i');

    echo '<hr>';

    $data_inicial = '2025-01-10';
    $data_final = '2025-01-31';
    // $time_inicial = str
  ?>
</body>
</html>