<?php
$secret= 13;
$numero= 0;
while ($numero != $secret){
$numero= (int)readline("digite um numero: ");

if ($numero < $secret) {
    echo "Numeração é mais alta!\n";
}
elseif ($numero > $secret) {
    echo "numeração é menor!\n";
}
else {
    echo "Parabéns! você acertou!\n";
}
}
?>
