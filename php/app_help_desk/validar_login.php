<?php

session_start();

$isUserAuthenticated = false;

$users = [
  ['email' => 'adm@teste.com.br', 'senha' => '123456'],
  ['email' => 'user@teste.com.br', 'senha' => 'abcde'],
];

foreach ($users as $user):
  if ($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']):
    $isUserAuthenticated = true;
  endif;
endforeach;

if ($isUserAuthenticated):
  $_SESSION['authenticated'] = 'SIM';

  echo 'Usuário autenticado.';
else:
  $_SESSION['authenticated'] = 'NAO';

  header('Location: index.php?login=error1');
endif;
