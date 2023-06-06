<?php
#variáveis estáticas - static

function contador (){
                                                    # ao terminar a execução do escobo, a variável morre
    static $contagem=0;                             # o estático guarda o estado da variável, salvando somente a sua linha e excluindo o resto da anterior
    echo $contagem . "<br>";
    $contagem++;

}

contador ();
contador ();
contador ();

?>