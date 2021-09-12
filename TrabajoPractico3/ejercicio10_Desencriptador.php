<?php

/**
 * Funcion para leer del teclado.
 */
function leerTeclado()
{
    return trim(fgets(STDIN));
}

echo "Ingresar el valor a desencriptar: ";
$valor = leerTeclado();

$aux;
// se intercambia el valor 1(posicion 0) por el 3(posicion 2)
$aux = $valor[0];
$valor[0] = $valor[2];
$valor[2] = $aux;

// se intercambia el valor 2(posicion 1) por el 4(posicion 3)
$aux = $valor[1];
$valor[1] = $valor[3];
$valor[3] = $aux;

// (reverso) residuo de la división entre “la suma del dígito más 7” y 10. (para cada digito)
/**
 * Durante la encriptacion al aplicador el '%' se pueden obtener 2 tipos de resultados 0.x o 1.x
 *  0.x > se obtiene el numero original - 7
 *  1.x > se obtiene el numero original + 3 -> (-7 + 10)
 */
$valor[0] = ((int)$valor[0] >= 7 ? (int)$valor[0] - 7 : (int)$valor[0] + 3);
$valor[1] = ((int)$valor[1] >= 7 ? (int)$valor[1] - 7 : (int)$valor[1] + 3);
$valor[2] = ((int)$valor[2] >= 7 ? (int)$valor[2] - 7 : (int)$valor[2] + 3);
$valor[3] = ((int)$valor[3] >= 7 ? (int)$valor[3] - 7 : (int)$valor[3] + 3);

echo "Valor: {$valor}";
