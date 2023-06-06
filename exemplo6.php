<?php
#Funções anônimas

function calcularImposto()
{

}

$icms = function ($valor)
{
 return $valor * 1.15;
};

echo $icms(200);
?>