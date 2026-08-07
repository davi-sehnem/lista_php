<?php

function formatarTexto($texto){

$maiusculo = strtoupper($texto);

$minusculo = strtolower($texto);

$primeiraMaiuscula = ucwords(strtolower($texto));

$quantidadeCaracteres = strlen($texto);

return [
    "maiusculo" => $maiusculo,
    "minusculo" => $minusculo,
    "primeira_maiuscula" => $primeiraMaiuscula,
    "quantidade_caracteres" => $quantidadeCaracteres
];

}

$texto_usuario = "Aquilo que se faz por amor está sempre além do bem e do mal.";

$resultado = formatarTexto($texto_usuario);

echo "Texto original: $texto_usuario <br>";
echo "Texto em maiúsculas: " . $resultado["maiusculo"] . "<br>";
echo "Texto em minúsculas: " . $resultado["minusculo"] . "<br>";
echo "Texto com a primeira letra de cada palavra em maiúscula: " . $resultado["primeira_maiuscula"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade_caracteres"] . "<br>";