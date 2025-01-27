<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <?
    // Crie um script capaz de produzir, através de um laço de repetição, 
    // um array com 6 elementos numériso aleatórios entre 1 e 60, simulando o 
    // funcionamento do sorteio da mega sena. Atente-se ao fato de que os números
    // aleatórios contidos dentro do array não podem ser repetidos.

    function gerarNumerosMegaSena() {
      $numeros = [];

      while (count($numeros) < 6):
        $numeroAleatorio = rand(1, 60);

        if (!in_array($numeroAleatorio, $numeros)):
          $numeros[] = $numeroAleatorio;
        endif;
      endwhile;

      sort($numeros);

      return $numeros;
    }

    $resultadoMegaSena = gerarNumerosMegaSena();
    
    echo '<pre>';
    print_r($resultadoMegaSena);
    echo '</pre>';
  ?>
</body>
</html>