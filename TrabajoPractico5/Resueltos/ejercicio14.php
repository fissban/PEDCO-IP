<?php

/**
 * Se obtiene la cantidad de segundos de acuerdo a los parametros :P
 * @param int $hora
 * @param int $minutos
 * @param int $segundos
 * @param String $tipo (AM, PM)
 * @return int
 */
function aSegundos($hora, $minutos, $segundos, $tipo)
{
    $sumatorio = 0;

    if ($tipo == "PM")
    {
        $sumatorio  = ($hora + 12) * 60 * 60;
    }
    else
    {
        $sumatorio  = $hora * 60 * 60;
    }

    $sumatorio = $sumatorio + ($minutos * 60);
    $sumatorio = $sumatorio + $segundos;
    return $sumatorio;
}

/**
 * A partir de una cantidad de segundos devuelve un string formateado como 'hora'
 * @param int $segundos
 * @return String
 */
function formatoHora($segundos)
{
    $hora = (int)($segundos / 60 / 60);
    $minutos = ((int)($segundos / 60)) - ($hora * 60);
    $segundos = $segundos - ($hora * 60 * 60) - ($minutos * 60);

    return "{$hora}h:{$minutos}m:{$segundos}s";
}


/**
 * Determina si la $hora1 es menor que $hora2
 * @param int $hora1 (expresada en segundos)
 * @param int $hora2 (expresada en segundos)
 * @return boolean
 */
function esMenor($hora1, $hora2)
{
    return $hora1 < $hora2;
}


function difHoras($hora1, $hora2)
{
    $diferencia = $hora1 - $hora2;
    $diferenciaFormat = formatoHora($diferencia);
    return "la diferencia es de {$diferenciaFormat}";
}


// round1
echo "ingresar una cantidad de horas(0 a 12): ";
$hora1 = trim(fgets(STDIN));

echo "ingresar una cantidad de minutos(0 a 60): ";
$min1 = trim(fgets(STDIN));

echo "ingresar una cantidad de segundos(0 a 60): ";
$seg1 = trim(fgets(STDIN));

echo "ingresar una tipo(AM/PM): ";
$tipo1 = trim(fgets(STDIN));

// simple salto de linea extra
echo "\n";

// round2
echo "ingresar otro cantidad de horas(0 a 12): ";
$hora2 = trim(fgets(STDIN));

echo "ingresar otro cantidad de minutos(0 a 60): ";
$min2 = trim(fgets(STDIN));

echo "ingresar otro cantidad de segundos(0 a 60): ";
$seg2 = trim(fgets(STDIN));

echo "ingresar otro tipo(AM/PM): ";
$tipo2 = trim(fgets(STDIN));

// simple salto de linea extra
echo "\n";

echo "las horas ordenadas de mayor a menor son:\n";

$horarioSegundos1 = aSegundos($hora1, $min1, $seg1, $tipo1);
$horarioSegundos2 = aSegundos($hora2, $min2, $seg2, $tipo2);

if (esMenor($horarioSegundos1, $horarioSegundos2))
{
    echo "     " . formatoHora($horarioSegundos2) . " son " . $horarioSegundos2 . " seg.\n";
    echo "     " . formatoHora($horarioSegundos1) . " son " . $horarioSegundos1 . " seg.\n";
    echo "     la diferencia es de " . difHoras($horarioSegundos2, $horarioSegundos1);
}
else
{
    echo "     " . formatoHora($horarioSegundos1) . " son " . $horarioSegundos1 . " seg.\n";
    echo "     " . formatoHora($horarioSegundos2) . " son " . $horarioSegundos2 . " seg.\n";
    echo "     la diferencia es: " . difHoras($horarioSegundos1, $horarioSegundos2);
}
