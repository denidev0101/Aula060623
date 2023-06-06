<?php

    function testarGlobal(){
        global $variavelGlobal;                     #variável global
        echo $variavelGlobal;
        echo "<hr>";
        $variavelGlobal= "modifiquei dentro da função";
    }

    $variavelGlobal= "fora da função";
    echo $variavelGlobal;
    echo "<hr>";
    testarGlobal();
    echo $variavelGlobal;
?>