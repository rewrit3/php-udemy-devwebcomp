<?php
$action = 'recover';

require 'task_controller.php';
?>

<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App Lista Tarefas</title>

  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <script>
    function edit(id, taskText) {
      let form = document.createElement('form');
      form.action = 'task_controller.php?action=update';
      form.method = 'post';
      form.className = 'row';

      let inputTask = document.createElement('input');
      inputTask.type = 'text';
      inputTask.name = 'task';
      inputTask.className = 'col-9 form-control';
      inputTask.value = taskText;

      let inputId = document.createElement('input');
      inputId.type = 'hidden';
      inputId.name = 'id';
      inputId.value = id;

      let button = document.createElement('button');
      button.type = 'submit';
      button.className = 'col-3 btn btn-info';
      button.innerHTML = 'Atualizar';

      form.appendChild(inputTask);
      form.appendChild(inputId);
      form.appendChild(button);

      let task = document.getElementById('task_' + id);
      task.innerHTML = '';
      task.insertBefore(form, task[0]);
    }

    function remove(id) {
      location.href = 'task_list.php?action=remove&id=' + id;
    }

    function done(id) {
      location.href = 'task_list.php?action=done&id=' + id;
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Lista Tarefas
      </a>
    </div>
  </nav>

  <div class="container app">
    <div class="row">
      <div class="col-sm-3 menu">
        <ul class="list-group">
          <li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
          <li class="list-group-item"><a href="task_new.php">Nova tarefa</a></li>
          <li class="list-group-item active"><a href="#">Todas tarefas</a></li>
        </ul>
      </div>

      <div class="col-sm-9">
        <div class="container pagina">
          <div class="row">
            <div class="col">
              <h4>Todas tarefas</h4>
              <hr />

              <? foreach ($tasks as $index => $task): ?>
                <div class="row mb-3 d-flex align-items-center tarefa">
                  <div class="col-sm-9"
                    id="task_<?= $task->id ?>">
                    <?= $task->task ?> (<?= $task->status ?>)
                  </div>

                  <div class="col-sm-3 mt-2 d-flex justify-content-between">
                    <i class="fas fa-trash-alt fa-lg text-danger"
                      onclick="remove(<?= $task->id ?>)">
                    </i>

                    <? if ($task->status == 'pendente'): ?>
                      <i class="fas fa-edit fa-lg text-info"
                        onclick="edit(<?= $task->id ?>, '<?= $task->task ?>')">
                      </i>
                      <i class="fas fa-check-square fa-lg text-success"
                        onclick="done(<?= $task->id ?>)">
                      </i>
                    <? endif; ?>
                  </div>
                </div>
              <? endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>