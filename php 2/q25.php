<?php
$soma = 0;
for ($i = 1; $i <= 7; $i++) {
    $temperatura = (float) readline("Digite a temperatura do dia $i: ");
    $soma += $temperatura;
    if ($i == 1 || $temperatura > $maior) {
        $maior = $temperatura;
    }
}

$media = $soma / 7;
echo "\nTemperatura media: " . number_format($media, 2, ',', '.') . " °C\n";
echo "Maior temperatura registrada: " . $maior . " °C\n";
?>
