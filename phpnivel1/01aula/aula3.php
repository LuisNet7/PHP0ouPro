<?php

$numeros = [10, 20, 24, 91, 18];

$filtrados = array_filter($numeros, function($item){
    if($item < 30){
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);

echo "<br>------<br>";

$dobrados = array_map(function($item){
    return $item * 2;
}, $numeros);

print_r($dobrados);

echo "<br>------<br>";

$pos = array_search(91, $numeros);

echo $pos;

echo "<br>------<br>";

sort($numeros);
print_r($numeros);

echo "<br>------<br>";

rsort($numeros);
print_r($numeros);

echo "<br>------<br>";

asort($numeros);
print_r($numeros);

echo "<br>------<br>";

arsort($numeros);
print_r($numeros);












?>