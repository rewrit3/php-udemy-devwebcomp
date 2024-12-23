<?php
class TaskService
{
  public $connection;
  public $task;

  public function __construct(Connection $connection, Task $task)
  {
    $this->connection = $connection->connect();
    $this->task = $task;
  }

  public function create()
  {
    $query = 'INSERT INTO tasks (task) VALUES (:task)';

    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':task', $this->task->__get('task'));
    $stmt->execute();
  }

  public function read()
  {
    $query = 'SELECT t.id, t.task, s.status
                FROM tasks AS t
                LEFT JOIN status AS s ON (t.id_status = s.id)';

    $stmt = $this->connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }

  public function update()
  {
    $query = ' UPDATE tasks
                  SET task = :task 
                WHERE id = :id';

    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':task', $this->task->__get('task'));
    $stmt->bindValue(':id', $this->task->__get('id'));

    return $stmt->execute();
  }

  public function remove()
  {
    $query = 'DELETE FROM tasks 
                    WHERE id = :id';

    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':id', $this->task->__get('id'));
    $stmt->execute();
  }

  public function done()
  {
    $query = ' UPDATE tasks
                  SET id_status = ? 
                WHERE id = ?';

    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(1, $this->task->__get('id_status'));
    $stmt->bindValue(2, $this->task->__get('id'));

    return $stmt->execute();
  }
}
