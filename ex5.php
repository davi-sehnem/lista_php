<?php

function analisar_texto($texto){

$qnt_palavras = str_word_count($texto);
$qnt_espaços = substr_count("$texto", " ");
$qnt_caracteres = strlen($texto) - $qnt_espaços;

preg_match_all('/[aeiouáéíóúãõâêîôûàèìòù]/i', $texto, $qnt_vogais);
$vogais = count($qnt_vogais[0]);

preg_match_all('/[b-df-hj-np-tv-xyzç]/i', $texto, $qnt_consoantes);
$consoantes = count($qnt_consoantes[0]);

echo "Frase Original: $texto <br>";
    echo "Quantidade de palavras: $qnt_palavras <br>";
    echo "Quantidade de caracteres (sem espaços): $qnt_caracteres <br>";
    echo "Quantidade de vogais: $vogais <br>";
    echo "Quantidade de consoantes: $consoantes <br>";

};



analisar_texto("Davi Sehnem é o cara dos códigos");


?>