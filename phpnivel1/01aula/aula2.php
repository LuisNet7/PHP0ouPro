<?php
//Arrow function
$parcela = fn(int $valor) => $valor * 0.1;

//$funcao = $parcela;

echo $parcela(90);

//echo $funcao(82);

$soma = fn(int $n1, int $n2 =0) => $n1 + $n2;

echo "<br>------<br>";

echo $soma(50);

//funcão recurciva 
echo "<br>------<br>";

function dividir($numero){
    $metade =  $numero / 2;
    echo $metade."<br/>";

    if(round($metade) > 0){
        dividir($metade);
    }

}

dividir(100);

















?>