<?php

function leerParteEntera($valor, $posicion)
{

    $divisor = pow(10, $posicion);
    return (int)(($valor % $divisor) / pow(10, $posicion - 1));
}


echo leerParteEntera(5678, 2);
