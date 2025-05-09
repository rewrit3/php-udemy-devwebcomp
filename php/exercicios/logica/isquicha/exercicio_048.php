<?php
// Estruturas de repetição
// Exercicio 048
/* 
  Faça um programa que leia e valide as seguintes informações: 
    - Nome: maior que 3 caracteres; 
    - Idade: entre 0 e 150; 
    - Salário: maior que zero; 
    - Sexo: 'f' ou 'm'; 
    - Estado Civil: 's', 'c', 'v', 'd';
*/
function getEntry(string $message): string {
  echo $message;

  return trim(fgets(STDIN));
}

function getValidName(): string {
  $name = getEntry('Digite o nome: ');

  while (strlen($name) < 4):
    $name = getEntry("Nome inválido, pois precisa ter mais que 3 caracteres.\nPor favor, digite novamente: ");
  endwhile;

  return $name;
}

function getValidAge(): int {
  $age = (int) getEntry('Digite a idade: ');

  while ($age < 0 or $age > 150):
    $age = getEntry("Idade inválida, pois precisa ser entre 0 e 150.\nPor favor, digite novamente: ");
  endwhile;

  return $age;
}

function getValidSalary(): float {
  $salary = (float) getEntry('Digite o salário: ');

  while ($salary <= 0):
    $salary = getEntry("Salário inválido, pois precisa ser maior que 0.\nPor favor, digite novamente: ");
  endwhile;

  return $salary;
}

function getValidGender(): string {
  $gender = (string) strtoupper(trim(getEntry('Digite o sexo: ')));

  while ($gender != 'M' and $gender != 'F'):
    $gender = getEntry("Sexo inválido, pois precisa ser 'M' (Masculino) ou 'F' (Feminino).\nPor favor, digite novamente: ");
  endwhile;

  return $gender;
}

function getValidMaritalStatus(): string {
  $maritalStatus = (string) strtoupper(trim(getEntry('Digite o estado civil: ')));

  while ($maritalStatus != 'S' and $maritalStatus != 'C' and $maritalStatus != 'V' and $maritalStatus != 'D'):
    $maritalStatus = getEntry("Sexo inválido, pois precisa ser 'S' (Separado), 'C' (Casado), 'V' (Viuvo) ou 'D' (Divorciado).\nPor favor, digite novamente: ");
  endwhile;

  return $maritalStatus;
}

$name = getValidName();
$age = getValidAge();
$salary = getValidSalary();
$gender = getValidGender();
$maritalStatus = getValidMaritalStatus();

echo "O nome foi cadastrado com sucesso. \n";
echo "A idade foi cadastrada com sucesso. \n";
echo "O salário foi cadastrado com sucesso. \n";
echo "O sexo foi cadastrado com sucesso. \n";
echo "O estado civil foi cadastrado com sucesso. \n";
