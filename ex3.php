<?php

function mascaraCpf(){

$cpf = 1234567891011;
$mascaraCpf = str_replace("1234567","*******",$cpf);


echo "CPF orginal: $cpf <br> ";
echo "CPF mascarado: $mascaraCpf <br> ";
}

mascaraCpf();


?>