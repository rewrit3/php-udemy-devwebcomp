<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    // Crie uma função para calcular o IR a ser pago com base em um salário passado por parâmetro.
    $salario = 10000;
    function calcularImpostoRenda($salario) {
      $aliquota = 0;

      // isento
      if ($salario <= 1903.98):
        $aliquota = 'Isento';

      // 7,5%
      elseif ($salario >= 1903.99 and $salario <= 2826.65):
        $aliquota = 7.5;

      // 15%
      elseif ($salario >= 2826.66 and $salario <= 3751.05):
        $aliquota = 15;

      // 22,5%
      elseif ($salario >= 3751.06 and $salario <= 4664.68):
        $aliquota = 22.5;
      
      // 27,5%
      elseif ($salario > 4664.68):
        $aliquota = 27.5;

      endif;

      return $aliquota;
    }

    $resultado = calcularImpostoRenda($salario);
    echo "O cálculo do IR de acordo com o salário de R$ $salario é: <b>$resultado%</b>";
  ?>
</body>
</html>