<?php
$preco = 320;
$preco_com_acrescimo = $preco * 1.12;


echo "Valor total da compra: R$" . number_format($preco_com_acrescimo, 2, ',', '.') . "\n";

for ($i = 1; $i <= 10; $i++)
 {
    $valor_parcela = $preco_com_acrescimo / $i;
    echo $i . "x de R$" . number_format($valor_parcela, 2, ',', '.') . "\n";
}

