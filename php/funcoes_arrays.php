<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    echo '// is_array() <br>';
    // $array = 'String';
    $array = [];
    $retorno = is_array($array);

    if ($retorno):
      echo 'Sim, é um array.';
    else:
      echo 'Não, não é um array.';
    endif;

    echo '<hr>';

    echo '// array_keys() <br>';
    $array = [1 => 'a', 7 => 'b', 18 => 'c'];
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $chaves_array = array_keys($array);
    echo '<pre>';
    print_r($chaves_array);
    echo '</pre>';

    echo '<hr>';

    echo '// sort() <br>';
    $array = ['teclado', 'mouse', 'monitor', 'gabinete', 'fonte'];
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    sort($array);
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    echo '<hr>';
    
    echo '// asort() <br>';
    $array = ['teclado', 'mouse', 'monitor', 'gabinete', 'fonte'];
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    asort($array);
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    echo '<hr>';

    echo '// count() <br>';
    $array = ['teclado', 'mouse', 'monitor', 'gabinete', 'fonte'];
    echo '<pre>';
    print_r($array);
    echo count($array);
    echo '</pre>';
    
    echo '<hr>';

    echo '// array_merge() <br>';
    $array1 = ['osx', 'windows'];
    $array2 = ['linux'];
    $array3 = ['solaris'];
    $novo_array = array_merge($array2, $array1, $array3);
    echo '<pre>';
    print_r($novo_array);
    echo '</pre>';
    
    echo '<hr>';

    echo '// explode() <br>';
    $string = '17/01/2025';
    $array_retorno = explode('/', $string);
    echo '<pre>';
    print_r($array_retorno);
    echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
    echo '</pre>';
    
    echo '<hr>';

    echo '// implode() <br>';
    $array = ['a', 'b', 'x', 'y'];
    $string_retorno = implode('/', $array);
    echo $string_retorno;
    
    echo '<hr>';
  ?>
</body>
</html>