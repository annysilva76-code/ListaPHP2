<?php
$numero = (int)readline("digite um numero de 1 a 10:");
for ($i = 1; $i <= 10; $i ++)  {
    echo "$numero x $i = " . ($numero * $i) . PHP_EOL;
}
?>
