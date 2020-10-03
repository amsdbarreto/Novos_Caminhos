<?php

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;

echo "<p> RESPOSTA...:  ".isLucky(261534)."</p>";

function isLucky($n)
{
    $array_transform=str_split($n); // transformo em array
    var_dump( $array_transform) ;
    $tam_array=intval(count($array_transform)/2); // conto a qtd do array
    //$tam_array=intval(count(int$n)/2) ; //  divisão do array
    $p1=array_sum(array_slice($array_transform,0,$tam_array));
    $p2=array_sum(array_slice($array_transform,$tam_array));
    if ($p1==$p2)
    {
       return "SORTE";
    }
    else {
         return "AZAR";
    }


}