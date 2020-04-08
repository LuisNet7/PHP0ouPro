<?php 

$array = array(
    "nome" => "Luis",
    "idade" => "33",
    "cidade" => "Salvador",
    "pais" => "Brasil"
);

$array2 = array_keys($array);

print_r($array2);

echo "<br>";
echo "<br>";

$array3 = array_values($array);

print_r($array3);

echo "<br>";
echo "<br>";

//remove o ultimo no arraya
array_pop($array);

print_r($array);

echo "<br>";
echo "<br>";

//remove a primeira no array
array_shift($array);

print_r($array);

echo "<br>";
echo "<br>";

$array4 = ["luis", "gugui","jessé"];

//ordem alfabetica 
asort($array4);

print_r($array4);

echo "<br>";
echo "<br>";

//ao contrário 
arsort($array4);

print_r($array4);

echo "<br>";
echo "<br>";

echo "Total é de " .count($array4);

echo "<br>";
echo "<br>";

if(in_array("luis", $array4))
{
    echo "Luis está na lista.";
} else {
    echo "luis não está na lista.";
}

$lista1 = [
    "um",
    "dois",
    "três",
    "quatro"
];

$lista2 = [
    ...$lista1,
    "cinco",
    "seis",
    "sete"
];

echo "<br>";
echo "<br>";

foreach($lista2 as $dado)
{
    echo "<p>a lista é $dado<p>";
}

echo "<br>";
echo "<br>";

$lista3 = [...$lista1, ...$lista2];

print_r($lista3);



























?>