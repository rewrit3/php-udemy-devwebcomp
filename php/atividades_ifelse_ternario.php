<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    $pessoaNome = 'Adolfo';
    $pessoaIdade = 35;
    $pessoaPeso = 110.00;

    if (($pessoaIdade >= 16 and $pessoaIdade <= 69) and $pessoaPeso >= 50.00):
      echo "$pessoaNome atende aos requisitos para doar sangue.";
    else:
      echo "$pessoaNome não atende aos requisitos para doar sangue.";
    endif;
  ?>
</body>
</html>