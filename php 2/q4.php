<?php

$num = intval(readline("Escreva o número: "));
$multiplicador = 0;


while ($multiplicador <10){
    $multiplicador++;
    $resultado = $num * $multiplicador;
    echo "$num * $multiplicador = $resultado \n";
}

?>
