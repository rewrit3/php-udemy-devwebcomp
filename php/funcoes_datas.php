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

    // timestamp
    // 01/01/1970

    $data_inicial = '2025-01-01';
    $data_final = '2025-01-31';
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br>';
    echo $data_final . ' - ' . $time_final;
    echo '<br>';

    $diferenca_times = $time_final - $time_inicial;
    echo 'A diferença em segundos entre as datas é: ' . $diferenca_times;
    echo '<br>';

    $segundos_dia = 24 * 60 * 60;
    echo 'Um dia possui ' . $segundos_dia . ' segundos.';
    echo '<br>';

    $diferenca_datas = $diferenca_times / $segundos_dia;
    echo 'A diferença em dias entre as datas é: ' . $diferenca_datas;
  ?>
</body>
</html>