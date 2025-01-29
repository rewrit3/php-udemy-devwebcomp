<?php

// print_r($_GET);
// echo '<br>';

// echo $_GET['email'];
// echo '<br>';
// echo $_GET['senha'];

// print_r($_POST);
// echo '<br>';

// echo $_POST['email'];
// echo '<br>';
// echo $_POST['senha'];

$user_auth = false;

$users = [
  ['email' => 'adm@teste.com.br', 'senha' => '123456'],
  ['email' => 'user@teste.com.br', 'senha' => 'abcde'],
];

foreach ($users as $user):
  if ($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']):
    $user_auth = true;
  endif;
endforeach;

if ($user_auth):
  echo 'Usuário autenticado.';
else:
  header('Location: index.php?login=error');
endif;
