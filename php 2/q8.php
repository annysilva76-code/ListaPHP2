<?php
$opcao = -1;
while ($opcao != 0) {
    echo "1 - Cadastrar aluno<br>";
    echo "2 - Consultar aluno<br>";
    echo "3 - Excluir aluno<br>";
    echo "0 - Sair<br>";
    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Cadastrar aluno<br>";
            break;
        case 2:
            echo "Consultar aluno<br>";
            break;
        case 3:
            echo "Excluir aluno<br>";
            break;
        case 0:
            echo "Saindo do programa...<br>";
            break;
        default:
            echo "Opção inválida!<br>";
    }
    echo "\n";
}
?>
