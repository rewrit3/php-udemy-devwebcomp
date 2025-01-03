<?php
class Connection
{
  private $host = '127.0.0.1';
  private $dbname = 'udemy_php_pdo_app';
  private $user = 'root';
  private $pass = '';

  public function connect()
  {
    try {
      $connection = new PDO(
        "mysql:host=$this->host;dbname=$this->dbname",
        "$this->user",
        "$this->pass"
      );

      return $connection;
    } catch (PDOException $e) {
      echo '<p>' . $e->getMessage() . '</p>';
    }
  }
}
