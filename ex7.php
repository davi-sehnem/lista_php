<?php

function  calcularDesconto($preco) {

if($preco <= 100){
    $valor_final = $preco;
    $desconto = "0%";
}else if($preco < 500){
    $valor_final = $preco * 0.9;
    $desconto = "10%";
}else if($preco < 1000){
    $valor_final = $preco * 0.8;
    $desconto = "20%";
}else if($preco > 1000){
    $valor_final = $preco * 0.7;
    $desconto = "30%";
}

echo"Valor da compra: $preco. <br>";
echo"Desconto: $desconto. <br>";
echo"Valor final: $valor_final. <br>";

}

calcularDesconto(270);

?>