<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $valor = 'abc';

    switch ($valor) {
      case 1:
        echo 'Case: 1';
        break;

      case 'abc':
        echo 'Case: 2';
        break;

      case 3:
        echo 'Case: 3';
        break;
      
      default:
        echo 'Default';
        break;
    }
  ?>
</body>
</html>