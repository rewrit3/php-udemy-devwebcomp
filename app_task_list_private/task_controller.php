<?php
require('../app_task_list_private/task.model.php');
require('../app_task_list_private/task.service.php');
require('../app_task_list_private/connection.php');

$action = isset($_GET['action']) ? $_GET['action'] : $action;

// insert
if ($action == 'insert'):
  $task = new Task();
  $task->__set('task', $_POST['task']);

  $connection = new Connection();
  $taskService = new TaskService($connection, $task);

  $taskService->create();

  header('Location: task_new.php?included=1');

// recover
elseif ($action == 'recover'):
  $connection = new Connection();

  $task = new Task();
  $taskService = new TaskService($connection, $task);

  $tasks = $taskService->read();

// recover (pending)
elseif ($action == 'recoverPendingTasks'):
  $connection = new Connection();

  $task = new Task();
  $task->__set('id_status', 1);
  $taskService = new TaskService($connection, $task);

  $tasks = $taskService->readPendingTasks();

// update
elseif ($action == 'update'):
  $task = new Task();

  $task->__set('id', $_POST['id']);
  $task->__set('task', $_POST['task']);

  $connection = new Connection();

  $taskService = new TaskService($connection, $task);

  if ($taskService->update()):
    if (isset($_GET['pag']) and $_GET['pag'] == 'index'):
      header('location: index.php');
    else:
      header('location: task_list.php');
    endif;
  endif;

// remove
elseif ($action == 'remove'):
  $task = new Task();
  $task->__set('id', $_GET['id']);

  $connection = new Connection();

  $taskService = new TaskService($connection, $task);
  $taskService->remove();

  if (isset($_GET['pag']) and $_GET['pag'] == 'index'):
    header('location: index.php');
  else:
    header('location: task_list.php');
  endif;

// done
elseif ($action == 'done'):
  $task = new Task();
  $task->__set('id', $_GET['id']);
  $task->__set('id_status', 2);

  $connection = new Connection();

  $taskService = new TaskService($connection, $task);
  $taskService->done();

  if (isset($_GET['pag']) and $_GET['pag'] == 'index'):
    header('location: index.php');
  else:
    header('location: task_list.php');
  endif;
endif;