<?php

/**
 * Calcula el porcentaje de un valor
 * @param double $valor
 * @param double $porcentaje: porcentaje que se desea calcular de acuerdo a $valor
 * @return double 
 */
function calcularPorcentaje($valor, $porcentaje)
{
    return $valor * $porcentaje / 100;
}

/**
 * Calcula el total de agua destilada a usarse de acuerdo a Betametasona y Loratadina
 * @param double $btm
 * @param double $ltd
 * @return double
 */
function calcularAguaDestilada($btm, $ltd)
{
    return calcularPorcentaje($btm, 10) + calcularPorcentaje($ltd, 15);
}

echo "Ingresar cantiodad de Betametasona:";
$betametasona = trim(fgets(STDIN));

echo "Ingresar cantiodad de Loratadina:";
$loratadina = trim(fgets(STDIN));

$aguaDestilada = calcularAguaDestilada($betametasona, $loratadina);

echo "se requiere {$aguaDestilada} de agua destilada para la preparacion";
