<?php

function leerTeclado()
{
    return trim(fgets(STDIN));
}

/**
 * Calcula el area de un circulo
 * @param double $radio
 * @return double
 */
function calcularAreaCirculo($radio)
{
    return (M_PI * $radio);
}

/**
 * Calcula el area de la corona circular
 * @param double $radio1 (radio mayor)
 * @param double $radio2 (radio menor)
 * @return double
 */
function calcularAreaCoronaCircular($radio1, $radio2)
{
    return calcularAreaCirculo($radio1) - calcularAreaCirculo($radio2);
}

// TODO asumimos que el usuario ingresara correctamente los radios.

echo "ingrese el radio del primer circulo (el mayor): ";
$radio1 = trim(fgets(STDIN));

echo "ingrese el radio del segundo circulo (el menor): ";
$radio2 = trim(fgets(STDIN));

$areaTotal = calcularAreaCirculo($radio1);
$areaCoronaCircular = calcularAreaCoronaCircular($radio1, $radio2);

echo "Con el radio mayor de {$radio1} y el radio menor {$radio2}\n";
echo "Area total: {$areaTotal}\n";
echo "Area corona circular: {$areaCoronaCircular}";