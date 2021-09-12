<?php

/**
 * Funcion para leer del teclado.
 */
function leerTeclado()
{
    return trim(fgets(STDIN));
}

// echo "Este programa indica las equivalencias de tiempos para x cantida de segundos\n";

echo "ingresar los segundos: ";
$segundosTeclado = leerTeclado();

// calculos
$horas = (int)($segundosTeclado / 3600);
// mi calculo original
//$minutos = (int)(($segundosTeclado - ($horas * 3600)) / 60);
$minutos = (int)(($segundosTeclado % 3600) / 60);
// mi calculo original
//$segundos = $segundosTeclado - ($horas * 3600) - ($minutos * 60);
$segundos = (($segundosTeclado % 3600)  % 60);

echo "Es equivalente a {$horas} Horas {$minutos} Minutos {$segundos} Segundos";
