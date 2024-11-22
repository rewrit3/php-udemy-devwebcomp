<?php 
  require('../app_task_list_private/task.model.php');
  require('../app_task_list_private/task.service.php');
  require('../app_task_list_private/connection.php');

  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';

  $task = new Task();
  $task->__set('task', $_POST['task']);

  $connection = new Connection();

  $taskService = new TaskService($connection, $task);
  $taskService->create();

  // echo '<pre>';
  // print_r($taskService);
  // echo '</pre>';
?>