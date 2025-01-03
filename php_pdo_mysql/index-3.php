<?php
  $dsn = 'mysql:host=127.0.0.1;dbname=php_pdo';
  $username = 'root';
  $password = '';

  try {
    $connection = new PDO($dsn, $username, $password);

    // $query = 'select * from users where id = 6';
    $query = 'select * from users order by name desc limit 1';

    $stmt = $connection->query($query);
    // $user = $stmt->fetch(PDO::FETCH_OBJ);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<pre>';    
    print_r($user);
    echo '</pre>';

    // echo $user->name;

  } catch (PDOException $e) {
    echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
  }
  