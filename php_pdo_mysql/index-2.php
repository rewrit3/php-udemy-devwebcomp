<?php
  $dsn = 'mysql:host=127.0.0.1;dbname=php_pdo';
  $username = 'root';
  $password = '';

  try {
    $connection = new PDO($dsn, $username, $password);

    $query = 'select * from users';

    $stmt = $connection->query($query);
    $list = $stmt->fetchAll(PDO::FETCH_OBJ);
    // $list = $stmt->fetchAll(PDO::FETCH_NUM);
    // $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $list = $stmt->fetchAll();
    
    echo '<pre>';    
    print_r($list);
    echo '</pre>';

    echo $list[1]->name;

  } catch (PDOException $e) {
    echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
  }
  