<?php

function inverterTexto() {

$textoOriginal = "solrac";
$textoInvertido = strrev($textoOriginal);
$quantidade = mb_strlen($textoOriginal, 'UTF-8'); 

echo "Texto original: $textoOriginal. <br>";

echo "Texto Invertido: $textoInvertido. <br>";

echo "Quantidade de caracteres: $quantidade. <br> ";

}

inverterTexto();

?>