<?php

function leerTeclado()
{
    return trim(fgets(STDIN));
}

echo "Ingresar el valor a encriptar: ";
$valor = leerTeclado();

$valor[0] = strval((int)$valor[0] + 7) % 10;
$valor[1] = strval((int)$valor[1] + 7) % 10;
$valor[2] = strval((int)$valor[2] + 7) % 10;
$valor[3] = strval((int)$valor[3] + 7) % 10;

$aux;
// se intercambia el valor 1(posicion 0) por el 3(posicion 2)
$aux = $valor[0];
$valor[0] = $valor[2];
$valor[2] = $aux;

// se intercambia el valor 2(posicion 1) por el 4(posicion 3)
$aux = $valor[1];
$valor[1] = $valor[3];
$valor[3] = $aux;

echo "Valor: {$valor}";
