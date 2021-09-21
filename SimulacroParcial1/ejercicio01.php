<?php

/**
 * Se obtiene el tipo de llamada segun los parametros pasados
 * @param int $codInternacional
 * @param int $codArea
 * @return String
 */
function tipoDeLlamada($codInternacional, $codArea)
{
    if ($codInternacional == 54)
    {
        if ($codArea == 299)
        {
            return "corta";
        }

        return "larga";
    }
    return "internacional";
}

/**
 * Se obtiene el valor de un llamada segun su tipo
 * @param String $tipo
 * @return float
 */
function valorLlamada($tipo)
{
    if ($tipo == "internacional")
    {
        return 2;
    }
    else if ($tipo == "larga")
    {
        return 0.75;
    }

    return 0.2; // corta
}

// PROGRAMA PRINCIPAL

echo "Ingrese el codigo internacional: ";
$codigoInternacional = (int)trim(fgets(STDIN));

echo "Ingrese el codigo de area: ";
$codigoArea = (int)trim(fgets(STDIN));

echo "Ingrese la duracion: ";
$tiempoLlamada = (int)trim(fgets(STDIN));

$tipoDeLlamada = tipoDeLlamada($codigoInternacional, $codigoArea);
$valorDeLlamada = valorLlamada($tipoDeLlamada);

$costo = $tiempoLlamada * $valorDeLlamada;

echo "El costo de la llamada es de $" . $costo . " .";
