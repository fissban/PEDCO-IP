<?php

/**
 * Funcion para leer del teclado.
 */
function leerTeclado()
{
    return trim(fgets(STDIN));
}

echo "Este programa requiere que se ingresen los 2 valores de los catetos\n";

echo "ingresar primer cateto\n";
$cateto1 = leerTeclado();

echo "ingresar segundo cateto\n";
$cateto2 = leerTeclado();

// calculo de la hipotenusa 
$cateto1 *= $cateto1;
$cateto2 *= $cateto2;

$hipotenusa = sqrt($cateto1 + $cateto2);

echo "Hipotenuza {$hipotenusa}";
