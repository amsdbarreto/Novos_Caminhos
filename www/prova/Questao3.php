<?php

// Questão 3
// Dado um vetor de inteiros, encontre o par de elementos
// adjacentes que possui o maior produto
// e depois retorne o valor desse produto.

//Exemplo

//Pois inputArray = [3, 6, -2, -5, 7, 3], 
// o valor de retorno deve ser 21.
// pois 7 e 3 produz o maior produto.

// Retorno o maior produto
//O maior produto de elementos adjacentes.

adjacentElementsProduct([5, 6, -4, 2, 3, 2, -23]);

function adjacentElementsProduct($inputArray)
{
    // CÓDIGO
    $calcatual=0;
    $calcanterior=0;
    $x=count($inputArray)-1;

    foreach ($inputArray as $key => $value) 
    {
        
            
        if($key < $x)
        {
           $calcatual=($value*$inputArray[$key+1]);
           echo "<p>".$key ." ==> ".$value. " * ".$inputArray[$key+1]. " = " .$calcatual."</p>";
            
            if ($calcatual>=$calcanterior)
            {
                $calcanterior=$calcatual;
                
            }
        }
        
        # code...
    }
    echo 'valor :'. $calcanterior;
}