<?php
  class TaskService {
    public $connection;
    public $task;

    public function __construct(Connection $connection, Task $task) {
      $this->connection = $connection->connect();
      $this->task = $task;
    }

    public function create() {
      $query = 'INSERT INTO tasks (task) VALUES (:task)';
      $stmt = $this->connection->prepare($query);
      $stmt->bindValue(':task', $this->task->__get('task'));
      $stmt->execute();
    }

    public function read() {}
    public function update() {}
    public function delete() {}
  }
?>