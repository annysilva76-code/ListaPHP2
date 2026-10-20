<?php
$litros= 0;
for ($i = 1; $i <= 7; $i ++){
$consumo = (float) readline("digite a quantidade de agua utilizados neste dia $i: ");
$litros += $consumo;
echo "o total de litros consumidos em uma semana é: " . $litros . "\n";
}
?>
