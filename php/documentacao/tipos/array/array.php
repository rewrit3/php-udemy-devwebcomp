<?php

# exemplo 1
/* $array1 = array(
  "foo" => "bar",
  "bar" => "foo",
);

$array2 = [
  "foo" => "bar",
  "bar" => "foo",
];

var_dump($array1, $array2); */

# exemplo 2
// Se vários elementos na declaração do array utilizam a mesma chave, 
// apenas o último será utilizado, enquanto todos os outros serão sobrescritos.
/* $array = array(
  1 => "a",
  "1" => "b",
  1.5 => "c",
  true => "d",
);

var_dump($array); */

# exemplo 3
// As chaves dos arrays no PHP podem conter, ao mesmo tempo, int e string, 
// porque o PHP não faz distinção entre arrays indexados e associativos.
/* $array = array(
  "foo" => "bar",
  "bar" => "foo",
  100 => -100,
  -100 => 100,
);

var_dump($array); */

# exemplo 4
// A key é opcional. Se não for especificada, o PHP utilizará o incremento 
// da chave do tipo int com maior valor utilizado.
/* $array = array("foo", "bar", "hello", "world");

var_dump($array); */

# exemplo 5
// É possível especificar a chave somente para alguns elementos e 
// omití-las para outros:
// Como pode ver, o último valor "d" foi atribuído a chave 7. 
// Isso acontece porque a chave com maior inteiro antes dela era 6.
/* $array = array(
  "a",
  "b",
  6 => "c",
  "d",
);

var_dump($array); */

# exemplo 6
// Este exemplo inclui todas as variações de cast de tipo de chaves e 
// sobrescrita de elementos.
/* $array = array(
  1    => 'a',
  '1'  => 'b', // o valor "a" será sobrescrito por "b"
  1.5  => 'c', // o valor "b" será sobrescrito por "c"
  -1 => 'd',
  '01'  => 'e', // não é uma string de inteiro e NÃO sobrescreve a chave 1
  '1.5' => 'f', // não é uma string de inteiro e NÃO sobrescreve a chave 1
  true => 'g', // o valor "c" será sobrescrito por "g"
  false => 'h',
  '' => 'i',
  null => 'j', // o valor "i" será sobrescrito por "j"
  'k',      // o valor "k" será alocado na chave 2. Isto porque é o maior inteiro após a chave 1
  2 => 'l', // o valor "k" será sobrescrito por "l"
);

var_dump($array); */

# exemplo 7
// Ao atribuir uma chave inteira negativa n, o PHP irá atribuir n+1 à chave seguinte.
/* $array = [];

$array[-5] = 1;
$array[] = 2;

var_dump($array); */

// Acessando elementos do array com colchetes

# exemplo 8
// Elementos do array podem ser acessados utilizando a sintaxe array[chave].
/* $array = array(
  "foo" => "bar",
  42 => 24,
  "multi" => array(
    "dimensional" => array(
      "array" => "foo"
    )
  )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]); */

# exemplo 9
/* function getArray() {
  return array(1, 2, 3);
}

$secondElement = getArray()[1];

var_dump($secondElement); */

// Criando/modificando com a sintaxe de colchetes
