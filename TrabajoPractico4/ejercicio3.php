<?php

function leerTeclado()
{
    return trim(fgets(STDIN));
}

function calcular($m, $n)
{
    echo pow($m, $n) + sqrt(abs($m));
}

echo "Ingresar M: ";
$m = leerTeclado();

echo "Ingresar N: ";
$n = leerTeclado();

calcular($m, $n);
