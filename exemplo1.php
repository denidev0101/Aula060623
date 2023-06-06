<?php               //Introdução a função

    #escopo de variável em funções PHP

    function box ($fora){
        $set = "Dentro do box";
        echo $set . "<br>";
        echo "veio de fora da função por parâmetro,". $fora . "<br>"

    }
    
    $set ="Fora do box"
    box ($set) 

?>