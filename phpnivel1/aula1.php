<?php
//Condicional null cao

$nome = "luis";
$sobreNome = "Alberto";


$nomeCompleto = $nome;
//$nomeCompleto .= isset($sobreNome) ? $sobreNome : '';
$nomeCompleto .= $sobreNome ?? '';


echo $nomeCompleto;




































?>