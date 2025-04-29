<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div>
<?php


include('conexao.php');
print("<h1> Listagem de Usuários</h1>");
$sql = 'select * from usuarios';
$res = $conn->query($sql);
$qtde = $res ->num_rows;
if($qtde >0){
    print("<table class='table table-dark striped-columns'>");
    print ("<tr>");
    print("<th> Código</th>");
    print("<th> Nome</th>");
    print("<th> Senha</th>");
    print("<th> Email</th>");
    print("<th> CPF</th>");
    print("<th> Data</th>");
    print ("</tr>");
while($row = $res->fetch_object()){
    print "<tr>";
    print"<td>".$row ->codigo."</td>";
    print"<td>".$row ->nome."</td>";
    print"<td>".$row ->senha."</td>";
    print"<td>".$row ->email."</td>";
    print"<td>".$row ->cpf."</td>";
    print"<td>".$row ->data."</td>";
    print "</tr>"; 
}
    print"</table>";}


?>  
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>