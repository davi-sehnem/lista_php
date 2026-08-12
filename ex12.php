<?php

function analisarProdutos($produtos, $produto_pesquisado){
    $mais_caro = $produtos[0];
    $mais_barato = $produtos[0];
    $soma_preco = 0;
    $produto_encontrado = null;

       foreach ($produtos as $produto){

        if ($produto["preco"] > $mais_caro["preco"]){
            $mais_caro = $produto;
        }

        if ($produto["preco"] < $mais_barato["preco"]){
            $mais_barato = $produto;
        }

        $soma_preco += $produto["preco"];

        if (strtolower($produto["nome"]) == strtolower($produto_pesquisado)) {
            $produto_encontrado = $produto;
        }
}

$media_preco = $soma_preco / count($produtos);

return [
        "mais_caro" => $mais_caro,
        "mais_barato" => $mais_barato,
        "media_precos" => $media_preco,
        "pesquisado" => $produto_encontrado
    ];

}

$produtos_usuario = [
    ["nome" => "Batata", "preco" => 7.50],
    ["nome" => "Pão Torrado", "preco" => 14],
    ["nome" => "Coconut", "preco" => 6.700],
    ["nome" => "Picanha", "preco" => 45.00]
];

$resultado = analisarProdutos($produtos_usuario, "Carne");

echo "Produto mais caro: " . $resultado["mais_caro"]["nome"] . " - R$ " . $resultado["mais_caro"]["preco"] . "<br>";
echo "Produto mais barato: " . $resultado["mais_barato"]["nome"] . " - R$ " . $resultado["mais_barato"]["preco"] . "<br>";
echo "Média dos preços: R$ " . number_format($resultado["media_precos"], 2, ",", ".") . "<br>";

if ($resultado["pesquisado"]){
    echo "Produto pesquisado encontrado: " . $resultado["pesquisado"]["nome"] . " - R$ " . $resultado["pesquisado"]["preco"] . "<br>";
} else {
    echo "Produto pesquisado não encontrado.<br>";
}

?>