<?php

$implode = implode("#", $_POST);
$text = $implode . PHP_EOL;

$file = fopen('file.txt', 'a');
fwrite($file, $text);
fclose($file);

header('Location: abrir_chamado.php');
