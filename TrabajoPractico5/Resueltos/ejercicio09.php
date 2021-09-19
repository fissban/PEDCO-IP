<?php

/**
 * Se obtiene el tipo de clasificacion al que pertenece de acuerdo al IMC
 * @param float $imc
 * @return String
 */
function clasificacion($imc)
{
    if ($imc >= 40)
    {
        return "Obesidad morbida";
    }
    if ($imc >= 35)
    {
        return "Obesidad media";
    }
    if ($imc >= 30)
    {
        return "Obesidad leve";
    }
    if ($imc >= 25)
    {
        return "Sobrepeso";
    }
    if ($imc >= 18.5)
    {
        return "Normal";
    }
    return "Bajo peso";
}

/**
 * Se calcula el IMC
 * @param $peso float
 * @param $altura float
 * @return float
 */
function calcularIMC($peso, $altura)
{
    return $peso / pow($altura, 2);
}


// --------------------------------------------------------------------------------------------------------//
// ----------------------------------------- Aqui comienza la magia ---------------------------------------//
// --------------------------------------------------------------------------------------------------------//
echo "ingresar su peso en Kilogramos: ";
$peso = trim(fgets(STDIN));

echo "ingresar su altura en Metros: ";
$altura = trim(fgets(STDIN));

$imc = calcularIMC($peso, $altura);
$clasificacion = clasificacion($imc);

echo "Su IMC es de {$imc} y se clasifica como {$clasificacion}";
