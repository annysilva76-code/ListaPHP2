<?php
$somaPares = 0;
$somaImpares = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo "$i é par<br>";
        $somaPares += $i;
    } else {
        echo "$i é ímpar<br>";
        $somaImpares += $i;
    }
}

echo "<br>Soma dos números pares: $somaPares<br>";
echo "Soma dos números ímpares: $somaImpares";
?>
