<?php

$lista = array("luis","Gugui","Jessé");

$x = rand(0, 2);

echo "E o sortiado é: ".$lista[$x];

echo "<br>";

$n = number_format(34989.12123, 3, ",", ".");

echo "<br>";

echo $n;

$nome = "Luis Alberto sax";

$n1 = explode(" ", $nome);

echo "<br>";
echo "<br>";

print_r($n1);

echo "<br>";
echo "<br>";

$nome2 = array("Luis", "Alberto","sax");

$nomeCompleto = implode(" ", $nome2);

echo $nomeCompleto;

echo "<br>";
echo "<br>";

$n2 = number_format(8.287187239, 2);

echo $n2;

echo "<br>";
echo "<br>";

$texto = "O maior número";

$string = str_replace("maior", "menor", $texto);

echo $string;

echo "<br>";
echo "<br>";

$n3 = strtolower("LUIS ALBERTO");

echo $n3;

echo "<br>";
echo "<br>";

echo strtoupper($n3);

echo "<br>";
echo "<br>";

$n4 = "luis";

echo ucfirst($n4);

echo "<br>";
echo "<br>";

$n5 = "luis alberto sax";

echo ucwords($n5);










?>