<?php

class Dashboard {
  public $startDate;
  public $endDate;
  public $numberSales;
  public $totalSales;

  public function __get($attribute) {
    return $this->$attribute;
  }

  public function __set($attribute, $value) {
    $this->$attribute = $value;

    return $this;
  }
}

class Connection {
  private $host = '127.0.0.1';
  private $database = 'udemy_dashboard';
  private $username = 'root';
  private $password = '';

  public function connect() {
    try {
      $connection  = new PDO(
        "mysql:host=$this->host;dbname=$this->database",
        "$this->username",
        "$this->password"
      );

      $connection->exec('set charset utf8');

      return $connection;
    } catch (PDOException $e) {
      echo '<p>' . $e->getMessage() . '</p>';
    }
  }
}

class Service {
  private $connection;
  private $dashboard;

  public function __construct(Connection $connection, Dashboard $dashboard) {
    $this->connection = $connection->connect();
    $this->dashboard = $dashboard;
  }

  public function getNumberSales() {
    $query = 'SELECT COUNT(*) as numero_vendas 
              FROM tb_vendas 
              WHERE data_venda BETWEEN :data_inicio AND :data_fim';

    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':data_inicio', $this->dashboard->__get('startDate'));
    $stmt->bindValue(':data_fim', $this->dashboard->__get('endDate'));
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
  }

  public function getTotalSales() {
    $query = 'SELECT SUM(total) as total_vendas 
              FROM tb_vendas 
              WHERE data_venda BETWEEN :data_inicio AND :data_fim';

    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':data_inicio', $this->dashboard->__get('startDate'));
    $stmt->bindValue(':data_fim', $this->dashboard->__get('endDate'));
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
  }
}

$connection = new Connection();
$dashboard = new Dashboard();

$competency = explode('-', $_GET['competencia']);
$year = $competency[0];
$month = $competency[1];
$daysOfTheMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

$dashboard->__set('startDate', $year . '-' . $month . '-01');
$dashboard->__set('endDate', $year . '-' . $month . '-' . $daysOfTheMonth);

$service = new Service($connection, $dashboard);

$dashboard->__set('numberSales', $service->getNumberSales());
$dashboard->__set('totalSales', $service->getTotalSales());

// echo '<pre>';
echo json_encode($dashboard);
// echo '</pre>';
