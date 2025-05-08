<?php
// Estruturas de repetição
// Exercicio 047
/* 
  Faça um programa que leia um nome de usuário e a sua senha 
  e não aceite a senha igual ao nome do usuário, 
  mostrando uma mensagem de erro e voltando a pedir as informações.
*/

echo 'Digite o usuário: ';
$username = trim(fgets(STDIN));
echo 'Digite a senha: ';
$password = trim(fgets(STDIN));

while ($password === $username) {
  echo
  "Senha inválida, pois não pode ser igual ao nome de usuário.\nPor favor, digite uma senha válida: ";

  $password = trim(fgets(STDIN));
}

echo "A senha cadastrada com sucesso. \n";
