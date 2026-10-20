<?php
$num = (int) readline("Digite um número de 1 a 10: ");

for ($i = 1; $i <= 10; $i++) {
    $resul = $num * $i;
    echo "Resultado é: " . $resul . "\n";
}
?>
