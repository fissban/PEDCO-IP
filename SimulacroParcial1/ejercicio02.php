<?php

/**
 * Calcula la distancia entre 2 puntos usando pitagoras
 * @param int $xPto1
 * @param int $yPto1
 * @param int $xPto2
 * @param int $yPto2
 * @return float
 */
function distanciaPuntos($xPto1, $yPto1, $xPto2, $yPto2)
{
    $diferenciaX = $xPto1 - $xPto2;
    $diferenciaY = $yPto1 - $yPto2;
    return sqrt(pow($diferenciaX, 2) + pow($diferenciaY, 2));
}

function estadoCasa($radio, $escuelaX, $escuelaY, $casaX, $casaY)
{
    $distancia = distanciaPuntos($escuelaX, $casaX, $escuelaY, $casaY);

    if ($distancia <= $radio)
    {
        return "dentro";
    }
    return "fuera";
}

echo "------------ Datos Varios ------------\n";
echo "Ingresar el radio: ";
$radio = (int)trim(fgets(STDIN));

echo "--------- Datos de la escuela ---------\n";
echo "Ingresar coordenada X: ";
$x1 = (int)trim(fgets(STDIN));
echo "Ingresar coordenada Y: ";
$y1 = (int)trim(fgets(STDIN));

echo "--------- Datos de la casa ---------\n";
echo "Ingresar coordenada X: ";
$x2 = (int)trim(fgets(STDIN));
echo "Ingresar coordenada Y: ";
$y2 = (int)trim(fgets(STDIN));



$estado = estadoCasa($radio, $x1, $y1, $x2, $y2);
echo "La casa esta " . $estado . " del radio de la escuela";
