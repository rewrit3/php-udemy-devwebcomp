<?php

# Exemplo #1 Um array simples
/* $array1 = array(
  "foo" => "bar",
  "bar" => "foo",
);

$array2 = [
  "foo" => "bar",
  "bar" => "foo",
];

var_dump($array1, $array2); */

# Exemplo #2 Exemplo de conversão de tipo e sobrescrita
// Se vários elementos na declaração do array utilizam a mesma chave, 
// apenas o último será utilizado, enquanto todos os outros serão sobrescritos.
/* $array = array(
  1 => "a",
  "1" => "b",
  1.5 => "c",
  true => "d",
);

var_dump($array); */

# Exemplo #3 Misturando int e string nas chaves
// As chaves dos arrays no PHP podem conter, ao mesmo tempo, int e string, 
// porque o PHP não faz distinção entre arrays indexados e associativos.
/* $array = array(
  "foo" => "bar",
  "bar" => "foo",
  100 => -100,
  -100 => 100,
);

var_dump($array); */

# Exemplo #4 Arrays indexados sem chaves
// A key é opcional. Se não for especificada, o PHP utilizará o incremento 
// da chave do tipo int com maior valor utilizado.
/* $array = array("foo", "bar", "hello", "world");

var_dump($array); */

# Exemplo #5 Chaves em alguns elementos
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

# Exemplo #6 Exemplo de sobrescrita e cast de tipo complexo
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

# Exemplo #7 Exemplo de índice negativo
// Ao atribuir uma chave inteira negativa n, o PHP irá atribuir n+1 à chave seguinte.
/* $array = [];

$array[-5] = 1;
$array[] = 2;

var_dump($array); */

// Acessando elementos do array com colchetes

# Exemplo #8 Acessando elementos do array
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

# Exemplo #9 Referenciando elemento de um array
/* function getArray() {
  return array(1, 2, 3);
}

$secondElement = getArray()[1];

var_dump($secondElement); */

// Criando/modificando com a sintaxe de colchetes
/* $arr = [
  5 => 1,
  12 => 2
];

$arr[] = 56;

unset($arr[12]);

print_r($arr);

unset($arr);

print_r($arr); */

/* $arr = [1, 2, 3, 4, 5];
print_r($arr);

foreach ($arr as $i => $value) {
  unset($arr[$i]);
}

print_r($arr);

$arr[] = 6;

print_r($arr);

$arr = array_values($arr);
$arr[] = 7;

print_r($arr); */

// Desconstruindo arrays
# Exemplo #11 Desconstruindo arrays
/* $source_array = ['foo', 'bar', 'baz'];

print_r($source_array);

[$foo, $bar, $baz] = $source_array;

echo $foo, PHP_EOL;
echo $bar, PHP_EOL;
echo $baz, PHP_EOL; */

# Exemplo #12 Desconstruindo arrays em Foreach
// A desconstrução de arrays pode ser utilizada no foreach para 
// desconstruir um array multidimensional enquanto o percorre.
/* $source_array = [
  [1, 'John'],
  [2, 'Jane'],
];

print_r($source_array);

foreach ($source_array as [$id, $name]):
  echo "{$id}: '{$name}'\n";
endforeach; */

# Exemplo #13 Ignorando Elementos
// Elementos de arrays serão ignorados se a variável não for providenciada. 
// Desconstrução de arrays sempre inicia no índice 0.
/* $source_array = ['foo', 'bar', 'baz'];

// Atribui o elemento de índice 2 na variável $baz
[,, $baz] = $source_array;

print_r($source_array);
echo $baz; */

# Exemplo #14 Desconstruindo arrays associativos
/* $source_array = ['foo' => 1, 'bar' => 2, 'baz' => 3];
print_r($source_array);

// Atribui o elemento de índice 'baz' na variável $three
['baz' => $three] = $source_array;
echo $three, PHP_EOL;

['bar' => $bar] = $source_array;
echo $bar, PHP_EOL; */

// Exemplo #15 Trocando duas variáveis
// Desconstrução de arrays podem ser utilizada para trocar duas variáveis.
/* $a = 1;
$b = 2;

[$b, $a] = [$a, $b];

echo $a, PHP_EOL;
echo $b, PHP_EOL; */

// Funções úteis
