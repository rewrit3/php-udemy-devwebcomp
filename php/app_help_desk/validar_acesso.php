<?php
session_start();

if (!isset($_SESSION['authenticated']) or $_SESSION['authenticated'] != 'SIM'):
  header('Location: index.php?login=error2');
endif;
