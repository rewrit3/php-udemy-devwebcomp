<?php 
  require('../app_task_list_private/task.model.php');
  require('../app_task_list_private/task.service.php');
  require('../app_task_list_private/connection.php');

  $action = isset($_GET['action']) ? $_GET['action'] : $action;

  if ($action == 'insert'):
    $task = new Task();
    $task->__set('task', $_POST['task']);

    $connection = new Connection();

    $taskService = new TaskService($connection, $task);
    $taskService->create();

    header('Location: task_new.php?included=1');
  elseif ($action == 'recover'):
    $task = new Task();
    $connection = new Connection();

    $taskService = new TaskService($connection, $task);
    $tasks = $taskService->read();
  endif;
?>