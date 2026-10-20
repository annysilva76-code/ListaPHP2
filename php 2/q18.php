<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Digite a nota do aluno " . $i . ": ";
    $nota = (float) readline();

    echo "Nota do aluno " . $i . ": " . $nota . "\n";
}
?>
