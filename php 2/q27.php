<?php
$alunos = 12;
$acimaL = 0;
for ($i = 1; $i <= $alunos; $i++) {
    $faltas = (int) readline("Digite as faltas do aluno $i: ");
    if ($faltas > 15) {
        echo "Seu limite de faltas foi excedido!\n";
        $acimaL++;
    } else {
        echo "Seu limite de faltas não foi excedido!\n";
    }
    echo "\n";
}
echo "Total de alunos que ultrapassaram o limite: $acimaL\n";
?>
