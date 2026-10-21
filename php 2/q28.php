
<?php

$pequenos = 0;
$medios = 0;
$grandes = 0;
for ($i = 1; $i <= 10; $i++) {
    $peso = (float) readline("Digite o peso médio da fruta do lote $i (em gramas): ");

    if ($peso < 100) {
        echo "Lote $i: frutas pequenas.\n";
        $pequenos++;
    }
    elseif ($peso <= 200) {
        echo "Lote $i: frutas médias.\n";
        $medios++;
    }
    else {
        echo "Lote $i: frutas grandes.\n";
        $grandes++;
    }
    echo "\n";
}

echo "Total de lotes pequenos: $pequenos\n";
echo "Total de lotes médios: $medios\n";
echo "Total de lotes grandes: $grandes\n";

?>
