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
// Exemplo #16 Eliminando elementos intermediários
/* $a = [
  1 => 'um',
  2 => 'dois',
  3 => 'três',
];

print_r($a);
unset($a[2]);
print_r($a);

$b = array_values($a);
print_r($b); */

// Array: o que fazer e o que não fazer
// Exemplo #17 Delimitando chaves
/* error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

$arr = [1, 2];
$count = count($arr);

for ($i = 0; $i < $count; $i++):
  echo "\nVerificando $i: \n";
  echo "Ruim: " . $arr['$i'] . "\n";
  echo "Bom: " . $arr[$i] . "\n";
  echo "Ruim: {$arr['$i']}\n";
  echo "Bom: {$arr[$i]}\n";
endfor; */

// Exemplo #18 Mais exemplos
// Mostrando todos os erros
/* error_reporting(E_ALL);

$arr = array('fruta' => 'maçã', 'legume' => 'cenoura');

// Correto
echo $arr['fruta'], PHP_EOL;  // maçã
echo $arr['legume'], PHP_EOL; // cenoura

// Errado. Isto funciona mas lança um erro PHP porque
// é utilizada uma constante indefinida (fruta)
//
// Error: Undefined constant "fruta"
try {
  echo $arr[fruta];    // maçã
} catch (Error $e) {
  echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
}

// Esta instrução define uma constante para demonstrar o que acontece. O valor 'legume'
// é atribuído a uma constante denominada 'fruta'
define('fruta', 'legume');

// Observe a diferença agora
echo $arr['fruta'], PHP_EOL;  // maçã
echo $arr[fruta], PHP_EOL;    // cenoura

// O exemplo seguinte está ok, já que está dentro de uma string. Constantes não são
// observadas dentro de strings e por isso nenhum E_NOTICE acontece aqui
echo "Olá $arr[fruta]", PHP_EOL;      // Olá maçã

// Com uma exceção: chaves envolvendo arrays dentro de strings
// ativam a checagem de constantes, como em
echo "Olá {$arr[fruta]}", PHP_EOL;    // Olá cenoura
echo "Olá {$arr['fruta']}", PHP_EOL;  // Olá maçã

// Concatenação é uma outra oppção
echo "Olá " . $arr['fruta'], PHP_EOL; // Olá maçã */

// Convertendo para array
// Exemplo #19 Convertendo para um array
/* class A {
  private $B;
  protected $C;
  public $D;

  function __construct() {
    $this->{1} = null;
  }
}

var_export((array) new A()); */

// Exemplo #20 Convertendo um objeto em um Array
/* class A {
  private $A;
}

class B extends A {
  private $A;
  public $AA;
}

var_dump((array) new B()); */

// Exemplo #21 Expansão de arrays
/* $arr1 = [1, 2, 3];
$arr2 = [...$arr1];
$arr3 = [0, ...$arr1];
$arr4 = [...$arr1, ...$arr2, 111];
$arr5 = [...$arr1, ...$arr1];

function getArr() {
  return ['a', 'b'];
}

$arr6 = [...getArr(), 'c' => 'd'];

var_dump($arr1, $arr2, $arr3, $arr4, $arr5, $arr6); */

// Exemplo #22 Expansão de arrays com chaves duplicadas
// string key
/* $arr1 = ['a' => 1];
$arr2 = ['a' => 2];
$arr3 = ['a' => 0, ...$arr1, ...$arr2];

print_r($arr3);

// integer key
$arr4 = [1, 2, 3];
$arr5 = [4, 5, 6];
$arr6 = [...$arr4, ...$arr5];

print_r($arr6);
 */

// Exemplos
// Exemplo #23 Versatilidade do array
/* $a = [
  'color' => 'red',
  'taste' => 'sweet',
  'shape' => 'round',
  'name' => 'apple',
  4
];

$b = ['a', 'b', 'c'];

var_dump($a, $b);

$a = array();
$a['color'] = 'red';
$a['taste'] = 'sweet';
$a['shape'] = 'round';
$a['name'] = 'apple';
$a[] = 4;

$b = array();
$b[] = 'a';
$b[] = 'b';
$b[] = 'c';

var_dump($a, $b); */

// Exemplo #24 Utilizando array()
/* $map = [
  'versao' => 4,
  'OS' => 'Linux',
  'lang' => 'inglês',
  'short_tags' => true,
];

print_r($map);

$array = [
  7,
  8,
  0,
  156,
  -10
];

print_r($array);

$switching = [
  10,
  5 => 6,
  3 => 7,
  'a' => 4,
  11,
  '8' => 2,
  '02' => 77,
  0 => 12
];

print_r($switching);

$empty = [];
var_dump($empty); */

// Exemplo #25 Coleção
/* $cores = [
  'vermelho',
  'azul',
  'verde',
  'amarelo',
];

foreach ($cores as $cor):
  echo "Você gosta de $cor?\n";
endforeach; */

// Exemplo #26 Alterando valores em um laço
// É possível alterar diretamente os valores de um array passando-os como referência.
/* $cores = [
  'vermelho',
  'azul',
  'verde',
  'amarelo',
];

foreach ($cores as &$cor):
  $cor = mb_strtoupper($cor);
endforeach;

unset($cor);

print_r($cores); */

// Exemplo #27 Array baseado em 1
/* $primeiroQuarto = [
  1 => 'Janeiro',
  'Fevereiro',
  'Março'
];

print_r($primeiroQuarto); */

// Exemplo #28 Preenchendo um array
// $handle = opendir('.');

// while (false !== ($file = readdir($handle))):
//   $files[] = $file;
// endwhile;

// closedir($handle);

// print_r($files);

// Exemplo #29 Ordenando arrays
// sort($files);
// print_r($files);

// Exemplo #30 Arrays recursivos e multidimensionais
/* $fruits = [
  'frutas' => [
    'a' => 'laranja',
    'b' => 'banana',
    'c' => 'maçã',
  ],
  'numeros' => [
    1,
    2,
    3,
    4,
    5,
    6
  ],
  'buracos' => [
    'primeiro',
    5 => 'segundo',
    'terceiro',
  ]
];

print_r($fruits);

// echo $fruits['buracos'][5];
// echo $fruits['frutas']['a'];
// unset($fruits['buracos'][0]);

$juices['maca']['verde'] = 'bom';
print_r($juices); */

// Exemplo #31 Copiando arrays
$arr1 = [2, 3];
$arr2 = $arr1;
$arr2[] = 4;

$arr3 = &$arr1;
$arr3[] = 4;

var_dump($arr1, $arr2, $arr3);
