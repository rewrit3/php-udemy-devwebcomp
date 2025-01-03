<?php
  $dsn = 'mysql:host=127.0.0.1;dbname=php_pdo';
  $username = 'root';
  $password = '';

  try {
    $connection = new PDO($dsn, $username, $password);

    $query = 'create table if not exists users(
      id int not null primary key auto_increment,
      name varchar(50) not null,
      email varchar(100) not null,
      password varchar(32) not null
    )';

    $return = $connection->exec($query);
    echo $return;    
    
    // $query = 'insert into users(
    //     name, email, password
    //   ) values (
    //     "Adolfo", "adolfo@rewrite.com.br", "123456"
    //   )';

    // $return = $connection->exec($query);
    // echo $return;    
    
    $query = 'delete from users';

    $return = $connection->exec($query);
    echo $return;
  } catch (PDOException $e) {
    // echo '<pre>';
    // print_r($e);
    // echo '</pre>';

    echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
  }
  