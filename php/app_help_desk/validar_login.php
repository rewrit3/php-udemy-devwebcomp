<?php

session_start();

$isUserAuthenticated = false;
$userId = null;
$userProfileId = null;

$profiles = [
  [1 => 'Administrativo'],
  [2 => 'Usuário'],
];

$users = [
  ['id' => 1, 'profile_id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123'],
  ['id' => 2, 'profile_id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123'],
  ['id' => 3, 'profile_id' => 2, 'email' => 'jose@teste.com.br', 'senha' => '123'],
  ['id' => 4, 'profile_id' => 2, 'email' => 'maria@teste.com.br', 'senha' => '123'],
];

foreach ($users as $user):
  if ($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']):
    $isUserAuthenticated = true;
    $userId = $user['id'];
    $userProfileId = $user['profile_id'];
  endif;
endforeach;

if ($isUserAuthenticated):
  $_SESSION['authenticated'] = 'SIM';
  $_SESSION['id'] = $userId;
  $_SESSION['profile_id'] = $userProfileId;

  header('Location: home.php');
else:
  $_SESSION['authenticated'] = 'NAO';

  header('Location: index.php?login=error1');
endif;
