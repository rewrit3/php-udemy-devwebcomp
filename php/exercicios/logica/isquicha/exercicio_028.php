<?php

// Estruturas de decisão
// Exercicio 028
/* 
  Faça um Programa que pergunte em que turno você estuda. 
  Peça para digitar M-matutino ou V-Vespertino ou N- Noturno.

  Imprima a mensagem "Bom Dia!", "Boa Tarde!" ou "Boa Noite!" ou "Valor Inválido!", conforme o caso.
*/
if (isset($_POST['turno'])):
  if ($_POST['turno'] === 'M'):
    $mensagem = 'Bom dia!';
  elseif ($_POST['turno'] === 'V'):
    $mensagem = 'Boa tarde!';
  elseif ($_POST['turno'] === 'N'):
    $mensagem = 'Boa noite!';
  else:
    $mensagem = 'Valor inválido.';
  endif;
endif;

?>

<form action="http://php-udemy-devwebcomp.lvh.me/php/exercicios/logica/isquicha/exercicio_028.php?turno" method="post">
  <label for="turno">Turno</label>
  <br>
  <input type="text" name="turno" id="turno" placeholder=" M-Matutino, V-Vespertino ou N-Noturno" style="width: 250px;">
  <button type="submit">Submit</button>
</form>

<hr>

<?php if (isset($_POST['turno'])): ?>
  <p><?= $mensagem ?></p>
<?php endif; ?>