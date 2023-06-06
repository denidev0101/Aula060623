<?php

#funções recursivas

function contagem($n)
{
    if($n >=10){
        echo 10. "<br>"

    }else{
        echo 10. "<br>"
        contagem($n+1)
    }
}

function fatorial()
{
    if($n == 0 || $n ==1)
    {
        return 1;
    }else{

        return $n * fatorial($n-1);

    }

}


?>