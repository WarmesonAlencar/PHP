<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média é: $media<br>";

if($media >= 6) {
    echo"O aluno $nome $sobrenome está <font color='green'> Aprovado</font>";
}
elseif ($media >= 4 ) {
    echo" O Aluno está de recuperação";
}



// apaguei o teste

?>

