<?php

$array = array("Terça-feira", "Quarta-feira", "Quinta");
print_r($array);
echo "<br>";
echo($array[1]);
echo"<hr>";

$array2 = ["aula","php","html","CSS"];
print_r($array2);
echo "</pre>";

$array3=[];
$array3[] = "ADS";
$array3[] = "GTI";
$array3[] = "SI";
print_r($array3);
echo("<hr>");

$array4 = [1=> "Iphone 16",2=>"Galaxy",3=>"Zenfone",4=>"Xiaomi"];
print_r($array4);
echo "<br>";
echo($array4[4]);

echo "</pre>";
echo "<br>";
$array5 = range(1, 10, 2); // começa no 1 adiciona 2 em 2 até 10, nesse caso só vai até 9
print_r($array5);
echo "</pre>";
?>