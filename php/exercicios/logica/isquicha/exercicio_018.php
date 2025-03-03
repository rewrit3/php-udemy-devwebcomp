<?php

// Estruturas sequenciais
// Exercicio 018
/* 
  Faça um programa que peça o tamanho de um arquivo para download (em MB) 
  e a velocidade de um link de Internet (em Mbps), calcule e informe o tempo 
  aproximado de download do arquivo usando este link (em minutos).
*/
$tamanhoArquivoDownload = 1024; // 1024MB = 1GB
$velocidadeInternet = 1; // 1Mbps
$tempoSegundosDownload = $tamanhoArquivoDownload / $velocidadeInternet;
$tempoMinutosDownload = $tempoSegundosDownload / 60;

echo 'Tamanho do arquivo para download: ' . $tamanhoArquivoDownload . ' MB<br>';
echo 'Velocidade da Internet: ' . $velocidadeInternet . ' Mbps<br>';
echo 'Tempo aproximado para download: ' . number_format($tempoMinutosDownload, 2, '.', ',') . ' minutos<br>';
