<?php

function incrementaValor($num){
    $num+=5;
}

function incrementaRef(&$num){
    $num+=5;
}

$a = 1;
$b = 1;

incrementaValor($a);
incrementaRef($b);

echo "Por valor: {$a} <br> por referência:{$b}";

?>