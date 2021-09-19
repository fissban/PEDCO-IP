<?php

// ----------------------------- Funciones privadas ----------------------------- //
/**
 * Esta funcion se encarga de obtener un numero de una posicion especifica.
 * @ Ejemplo: si se pasa como $valor el numero '5678' y se pasa como $posicion el numero '2' obtendremos como resultado el '7'
 * @param int $valor: valor del que se quiere obtener un numero especifico.
 * @param int $posicion: posision del numero que se quiere obtener (1,2, n...)
 * @return int 
 */
function leerParteEntera($valor, $posicion)
{
    $divisor = pow(10, $posicion);
    return (int)(($valor % $divisor) / pow(10, $posicion - 1));
}

/**
 * Funcion interna para encriptar un entero menor a 10. Usado solo por la funcion 'encriptador'
 * @param int $valor
 * @return int
 */
function encriptarEntero($valor)
{
    return ($valor + 7) % 10;
}

/**
 * Funcion interna para desencriptar un entero menor a 10. Usado solo por la funcion 'desencriptador'
 * @param int $valor
 * @return int
 */
function desencriptarEntero($valor)
{
    /**
     * Durante la encriptacion al aplicador el '%' se pueden obtener 2 tipos de resultados 0.x o 1.x
     *  0.x > se obtiene el numero original - 7
     *  1.x > se obtiene el numero original + 3 -> (-7 + 10)
     */
    return $valor >= 7 ? ($valor - 7) : ($valor + 3);
}
// ----------------------------- Funciones publicas ----------------------------- //

/**
 * Funcion para encriptar un numero de 4 digitos
 */
function encriptador($valor)
{
    // se lee el valor en determinada posicion
    $valor1 = leerParteEntera($valor, 1);
    $valor2 = leerParteEntera($valor, 2);
    $valor3 = leerParteEntera($valor, 3);
    $valor4 = leerParteEntera($valor, 4);

    // se encriptan los valores
    $valor1 = encriptarEntero($valor1);
    $valor2 = encriptarEntero($valor2);
    $valor3 = encriptarEntero($valor3);
    $valor4 = encriptarEntero($valor4);

    return ($valor3) + ($valor4 * 10) + ($valor1 * 100) + ($valor2 * 1000);
}

/**
 * Funcion para desencriptar un numero de maximo 4 digitos
 */
function desencriptador($valor)
{
    // se lee el valor en determinada posicion
    $valor1 = leerParteEntera($valor, 1);
    $valor2 = leerParteEntera($valor, 2);
    $valor3 = leerParteEntera($valor, 3);
    $valor4 = leerParteEntera($valor, 4);

    // se desencripta cada valor
    $valor1 = desencriptarEntero($valor1);
    $valor2 = desencriptarEntero($valor2);
    $valor3 = desencriptarEntero($valor3);
    $valor4 = desencriptarEntero($valor4);

    return ($valor3) + ($valor4 * 10) + ($valor1 * 100) + ($valor2 * 1000);
}

// --------------------------------------------------------------------------------------------------------//
// ----------------------------------------- Aqui comienza la magia ---------------------------------------//
// --------------------------------------------------------------------------------------------------------//
echo "ingresar valor a encriptar: ";
$valor = trim(fgets(STDIN));

// validacion, se requiere q sea si o si de 4 digitos
if ($valor < 1000 || $valor > 9999)
{
    echo "Error: el valor a ingresar debe ser de 4 digitos";
}
else
{
    $encriptado = encriptador($valor);
    $desencriptado = desencriptador($encriptado);

    echo "para el valor {$valor} el valor encriptado es '{$encriptado}' y su valor desencriptado es '{$desencriptado}'";
}
