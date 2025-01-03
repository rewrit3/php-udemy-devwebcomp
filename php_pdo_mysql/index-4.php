<?php
  $dsn = 'mysql:host=127.0.0.1;dbname=php_pdo';
  $username = 'root';
  $password = '';

  try {
    $connection = new PDO($dsn, $username, $password);

    $query = 'select * from users';
    
    // $stmt = $connection->query($query);

    foreach ($connection->query($query) as $key => $value):
      print_r($value['name']);
      echo '<hr>';
    endforeach;

    // foreach($list as $key => $value):
    //   print_r($value['name']);
    //   echo '<hr>';
    // endforeach;

  } catch (PDOException $e) {
    echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
  }
  