<?php

$senha = 1234;
$tentativas= 0;
while ($tentativas != $senha){
   $tentativas = intval(readline("Digite sua senha: "));
if ($tentativas != $senha) {
    echo "acesso negado.\n";
}
else {
    echo "acesso permitido.";
}
}
?>
