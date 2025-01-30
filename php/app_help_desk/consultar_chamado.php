<?php

require_once('validar_acesso.php');

$tickets = [];

$file = fopen('file.txt', 'r');

while (!feof($file)):
  $item = fgets($file);
  $tickets[] = $item;
endwhile;

fclose($file);

?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="logout.php" class="nav-link">Sair</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">

            <? foreach ($tickets as $ticket):
              $ticketExploded = explode('#', $ticket);

              if ($_SESSION['profile_id'] == 2):
                if ($_SESSION['id'] != $ticketExploded[0]):
                  continue;
                endif;
              endif;

              if (count($ticketExploded) < 3):
                continue;
              endif;
            ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $ticketExploded[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $ticketExploded[2] ?></h6>
                  <p class="card-text"><?= $ticketExploded[3] ?></p>
                </div>
              </div>
            <? endforeach; ?>

            <div class="row mt-5">
              <div class="col-6">
                <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>