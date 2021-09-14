<?php

function leerTeclado()
{
    return trim(fgets(STDIN));
}

// -------------------------------------- A --------------------------------------------------- //
/**
 * i) Recibiendo como parámetro el lado de un triángulo equilátero, devolver su perímetro
 */
function perimetroTrianguloEquilatero($lado)
{
    return $lado * 3;
}

/**
 * ii) Recibiendo como parámetro el lado de un triángulo equilátero, devolver su área
 */
function areaTrianguloEquilatero($lado)
{
    $altura = ($lado * sqrt(3)) / 2;
    return ($lado * $altura) / 2;
}

// -------------------------------------- B --------------------------------------------------- //

echo "Programa para el calculo del area y perimetro de un triangulo equilatero\n";
echo "Ingrese el valor de uno de sus lados:";
$lado = leerTeclado();

$perimetro = perimetroTrianguloEquilatero($lado);
$area = areaTrianguloEquilatero($lado);

echo "Dado un triángulo equilátero de lado {$lado} cm, su perímetro es {$perimetro} cm y su área es {$area} cm2";
