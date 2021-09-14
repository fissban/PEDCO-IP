<?php

/**
 * Funcion para leer del teclado.
 */
function leerTeclado()
{
    return trim(fgets(STDIN));
}

echo "Ingrese empleado: ";
$nombre = leerTeclado();

echo "Ingrese horas trabajadas: ";
$horasTrab = leerTeclado();

echo "Ingrese el valor de la hora: ";
$valorHora = leerTeclado();

$ganancia = $horasTrab * $valorHora;
echo $nombre . " obtuvo $" . $ganancia;
