<?php

$texto = file_get_contents('textoaula1.txt');
$texto .= "\nLuis Alberto";

file_put_contents( 'textoaula1.txt', $texto);

echo "Arquivo modificado com sucesso!";





































