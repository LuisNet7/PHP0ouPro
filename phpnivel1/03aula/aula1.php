<?php

$texto = file_get_contents('textoaula1.txt');

echo $texto;

echo "<br>";
echo "<br>";

$texto = explode("\n", $texto);

echo "Linhas: ".count($texto);
























