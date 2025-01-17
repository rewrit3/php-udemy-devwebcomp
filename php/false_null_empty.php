<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    // false (true/false) - tipo variável boolean
    // null e empty - valores especiais
    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;

    echo '// null';
    echo '<br>';
    if (is_null($funcionario1)):
      echo '$funcionario1 é NULL.';
    else:
      echo '$funcionario1 não é NULL.';
    endif;

    echo '<br>';

    if (is_null($funcionario2)):
      echo '$funcionario2 é NULL.';
    else:
      echo '$funcionario2 não é NULL.';
    endif;

    echo '<br>';

    if (is_null($funcionario3)):
      echo '$funcionario3 é NULL.';
    else:
      echo '$funcionario3 não é NULL.';
    endif;

    echo '<hr>';

    echo '// empty';
    echo '<br>';
    if (empty($funcionario1)):
      echo '$funcionario1 é EMPTY.';
    else:
      echo '$funcionario1 não é EMPTY.';
    endif;

    echo '<br>';

    if (empty($funcionario2)):
      echo '$funcionario2 é EMPTY.';
    else:
      echo '$funcionario2 não é EMPTY.';
    endif;

    echo '<br>';

    if (empty($funcionario3)):
      echo '$funcionario3 é EMPTY.';
    else:
      echo '$funcionario3 não é EMPTY.';
    endif;
  ?>
</body>
</html>