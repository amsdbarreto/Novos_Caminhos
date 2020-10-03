<?php

// Questão 10

// Escreva uma função que inverta os caracteres
// entre parênteses (possivelmente aninhados)
// na string de entrada.

// As strings de entrada sempre serão bem
// formadas com ()s correspondentes .

// Exemplo

// Para inputString = "(bar)", a saída deve ser "rab"
// Para inputString = "foo(bar)baz", a saída deve ser "foorabbaz"

// Para inputString = "foo(bar)baz(blim)",
// a saída deve ser "foorabbazmilb"

do {
    # code...
    $resposta_final=reverseInParentheses("foo(bar(baz))blim");

} while (stripos($resposta_final,"(") >0 );


echo $resposta_final;

function reverseInParentheses($inputString)
{
    $continue=true;
    $inicio=0;
    $strresp="";
    do {
        
        $pos_inic=stripos($inputString,"(");
       
        
        if ($pos_inic<>false)
        {
            $strresp = $strresp.substr($inputString,$inicio,$pos_inic);
            
            $pos_fim=stripos($inputString,")");
            
            $strresp =$strresp.strrev(substr($inputString,$pos_inic+1,$pos_fim-$pos_inic-1));
            
            $inputString=substr($inputString,$pos_fim+1)  ;
            
        }
        else 
        {
            $strresp=$strresp.$inputString;
            $continue=false;
        }
       
    } while ($continue);
    $inputString="";
    return $strresp;
}