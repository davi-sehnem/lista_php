<?php

function converterTemperatura($temp, $escalaInicial, $escalaFinal)
{
    $valorConvertido = 0;
    if ($escalaInicial === 'Celsius') {
        if ($escalaFinal === 'Fahrenheit') {
            $valorConvertido = (($temp * 1.8) + 32);
        }
        if ($escalaFinal === 'Kelvin') {
            $valorConvertido = ($temp + 273.15);
        }
    }
    if ($escalaInicial === 'Fahrenheit') {
        if ($escalaFinal === 'Celsius') {
            $valorConvertido = ($temp - 32) * (5 / 9);
        }
        if ($escalaFinal === 'Kelvin') {
            $valorConvertido = ($temp - 32) * (5 / 9) + 273.15;
        }
    }
    if ($escalaInicial === 'Kelvin') {
        if ($escalaFinal === 'Celsius') {
            $valorConvertido = $temp - 273.15;
        }
        if ($escalaFinal === 'Fahrenheit') {
            $valorConvertido = ($temp - 273.15) * 1.8 + 32;
        }
    }
    return $valorConvertido;
}


$tempInput = 94;
$origem    = 'Fahrenheit';
$destino   = 'Celsius';


echo "Escala Inicial: $origem <br>";
echo "Escala Final: $destino <br>";
echo "Temperatura Original: $tempInput <br>";


$resultado = converterTemperatura($tempInput, $origem, $destino);

echo "Resultado da Conversão: $resultado <br>";

?>