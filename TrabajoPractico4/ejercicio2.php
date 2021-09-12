<?php

function esMultiploDe2($valor)
{   
    // se puede determinar si un numero es multiplo de 2 si este es par e ignorando el 0
    if($valor == 0)
    {
        return false;
    }
    return $valor % 2 == 0;
}
