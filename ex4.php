<?php

function gerarSenha($tamanho){

    $maiusculo = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $minusculo = "abcdefghijklmnopqrstuvwxyz";
    $caracteres = "!@#$%&*)_-={?:<^~";
    $numeros = "123456789";

    $todos = $maiusculo . $minusculo . $numeros . $caracteres;

    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $indice = random_int(0, strlen($todos) - 1);
        $senha .= $todos[$indice];
    }

    return $senha;

};

$tamanho = 9;

echo gerarSenha($tamanho);

?>

