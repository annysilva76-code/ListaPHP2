<?php
$num = (int) readline("Digite um número inteiro não negativo: ");
$fatorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $fatorial *= $i;
}

echo "O fatorial de " . $num . " é: " . $fatorial . "\n";
?>
