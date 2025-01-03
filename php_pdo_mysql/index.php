<?php
  if (!empty($_POST['email']) && !empty($_POST['password'])):
    $dsn = 'mysql:host=127.0.0.1;dbname=php_pdo';
    $username = 'root';
    $password = '';
  
    try {
      $connection = new PDO($dsn, $username, $password);

      $query = "SELECT * FROM users WHERE ";
      $query .= " email = :email ";
      $query .= " AND password = :password ";

      $stmt = $connection->prepare($query);
      $stmt->bindValue(':email', $_POST['email']);
      $stmt->bindValue(':password', $_POST['password']);
      $stmt->execute();

      $user = $stmt->fetch();      

      echo '<pre>';
      print_r($user);
      echo '</pre>';

    } catch (PDOException $e) {
      echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
    }
  endif;  
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>

  <body>
    <form method="post" action="index.php">
      <input type="text" name="email" placeholder="Email">
      <br />
      <input type="password" name="password" placeholder="Password">
      <br />

      <button type="submit">Entrar</button>
    </form>
  </body>
</html>