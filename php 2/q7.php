<?php
$notas= 0;
$soma= 0;

while ($notas <= 5) {
echo "digite a nota do aluno $notas: \n";
$cadaN= (float) readline();
$soma= $soma + $cadaN;
$notas++;
}

echo "a soma de todas as notas é: " . $soma;

?>
