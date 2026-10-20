<?php
$unidades= 0;
for ($i = 1; $i <= 5; $i ++){
$quantidades = (float) readline("digite a quantidade de unidades de produtos vendidos neste dia $i: ");
$unidades += $quantidades;
}
echo "o total de produtos vendidos em uma semana é: " . $unidades . "\n";
?>
