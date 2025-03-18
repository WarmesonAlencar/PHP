<?php

$nome = $_POST['nome'];
$nota1 = $_POST['n1'];
$nota2 = $_POST['n2'];
$nota3 = $_POST['n3'];

$media = ($nota1+$nota2+$nota3)/3;
echo ("O aluno ficou com média: $media");

if ($media>=6){
    echo("Aluno <font color='green'> APROVADO!</font>");
}elseif ($media > 4 || $media < 6){
    echo ("Aluno <font color='azul'> RECUPERAÇÃO</font>");
}else {
    echo ("Aluno <font color='red'> REPROVADO</font>");
}
?>