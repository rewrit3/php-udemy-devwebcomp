<?php

session_start();

$implode = implode("#", $_POST);

$title = str_replace('#', '-', $_POST['input_title']);
$category = str_replace('#', '-', $_POST['input_category']);
$description = str_replace('#', '-', $_POST['input_description']);

$text = $_SESSION['id'] . '#' . $title . '#' . $category . '#' . $description . PHP_EOL;

$file = fopen('file.txt', 'a');
fwrite($file, $text);
fclose($file);

header('Location: abrir_chamado.php');
