<?php

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].

almostIncreasingSequence([3, 5, 67, 98, 3]);

function almostIncreasingSequence($sequence)
{
    $retira=[];
    
    
    $x=count($sequence)-1;

    
    for ($key=0; $key <= $x;$key++ )
     { 
       $teste1=false;
       $teste2=false; 
        $value=$sequence[$key]    ;
        
        if($key < $x)
        {
           $dif = (($sequence[$key+1])-$value);
           if($dif<>1)
           {
            $teste1=false;   
            if(($key+2) <= $x)
            {
              $dif =(($sequence[$key+2])-$value);   
              if($dif==1)
              {  
               $retira[]=$sequence[$key+1] ;
               $teste2=true;
               $teste1=true;
               $key=$key+2;
              }
              else { $teste2=false;}
            }

           }
           else
            {
             $teste1=true;
            }
           
        }
        
    }
    //echo "<p> retirou {$retira}</p>";
   var_dump($retira);
   
   if($teste1== true and $teste2==true)
     {
       echo "<p> OK </p>";
     } 
     else
     {
         echo "<p>NÃO DÁ </p>";
     }


}