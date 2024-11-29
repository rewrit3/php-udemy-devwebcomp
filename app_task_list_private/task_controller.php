<?php 
  require('../app_task_list_private/task.model.php');
  require('../app_task_list_private/task.service.php');
  require('../app_task_list_private/connection.php');

  $task = new Task();
  $task->__set('task', $_POST['task']);

  $connection = new Connection();

  $taskService = new TaskService($connection, $task);
  $taskService->create();

  header('Location: task_new.php?included=1');
?>