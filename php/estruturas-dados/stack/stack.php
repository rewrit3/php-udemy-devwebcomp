<?php

// Cria uma pilha vazia (array)
$pilha = [];

// Empurra elementos para a pilha
array_push($pilha, 'Maçã');
array_push($pilha, 'Banana');
array_push($pilha, 'Cereja');

// A pilha agora é: ["Maçã", "Banana", "Cereja"]
print_r($pilha);

// Retira o elemento do topo da pilha
$topo = array_pop($pilha); // $topo é "Cereja"

// A pilha agora é: ["Maçã", "Banana"]
print_r($pilha);

echo "Elemento do topo: $topo \n"; // Imprime "Elemento do topo: Cereja"

// Verifica se a pilha está vazia
if (empty($pilha)):
  echo 'A pilha está vazia.';
else:
  echo 'A pilha não está vazia';
endif;
