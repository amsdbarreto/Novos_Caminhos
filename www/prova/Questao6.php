<?php

// Questão 6
// Dada uma matriz de strings, 
// retorna outra matriz contendo
// todas as suas strings mais longas.

//Exemplo

// Se inputArray = ["aba", "aa", "ad", "vcd", "aba"], 
// o valor de retorno ["aba", "vcd", "aba"].

allLongestStrings( ["a", "abc", "cbd", "zzzzzz", "a", "abcdef", "asasa", "aaaaaa"]);

function allLongestStrings($inputArray)
{
   
 

    $b=array_map("maximo",$inputArray);
    define ( "CONST_MAXI" , max($b));
    $c=array_map("maximo2",$inputArray);

    //var_dump($c);
    var_dump(array_filter($c));
}


function maximo2($item)
{
   if(strlen($item)==CONST_MAXI)
   {
     return $item;
   }
   else{
       return 0;
   }
    
}


function maximo($item)
{
   return strlen($item);
   
    //echo"<p>".$item." ==> " .strlen($item)."</p>";
    /*
    if(lenght($item)==CONST_MAXI)
    {
   
    } 
    else {
        return null;
    }
    */
}