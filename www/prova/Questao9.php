<?php

// Questão 9

// Algumas pessoas estão em uma fila no parque.
// As pessoas e as arvores no parque serão representadas
// por um vetor.

// O valor -1 representa uma árvore
// valor positivo representa a altura de uma pessoa

// Existem árvores entre as pessoas e as árvores 
// não não podem ser movidas.

// Sua tarefa é reorganizar as pessoas por suas alturas
// em uma ordem não decrescente, sem mover as árvores.

// Considere que as pessoas podem ser muito altas!

//Exemplo

//Se $a = [-1, 150, 190, 170, -1, -1, 160, 180], 
// o retorno deve ser [-1, 150, 160, 170, -1, -1, 180, 190].

$f=sortByHeight([23, 54, -1, 43, 1, -1, -1, 77, -1, -1, -1, 3]);

var_dump($f);

print_r($f);

function cmp($a, $b)
{   
    if ($a == -1 | $b== -1) {
    return 0;
    }
    return ($a < $b) ? -1 : 1;
}


function sortByHeight($a)
{
   //usort($a, "cmp");
   
  $new_array=[];

   $retira= array_diff($a,[-1]);
   $retira2=array_diff($a,$retira);
   sort($retira);
   
   foreach ($a as $key => $value)
    {
      
      if($value==-1)
      {
         $new_array[$key]=$value;   
      }
      else
       {
         $new_array[$key]=current($retira);
         next($retira);   
       }
   }

   return $new_array;
   

}