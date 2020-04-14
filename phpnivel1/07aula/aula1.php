<?php

$senha = '123';
//recomendado
$hash = password_hash($senha, PASSWORD_DEFAULT); 

echo "Senha original: ".$senha."<br>";
echo "Hash: ".$hash;

echo "<p>------------------------------<p>";

if(password_verify($senha, $hash)){
    echo 'senha correta';
} else {
    echo 'senha errada!';
}


echo "<p>------------------------------<p>";


$senha2 = '123';

$hash2 = password_hash($senha2, PASSWORD_BCRYPT); 

echo "Senha original: ".$senha2."<br>";
echo "Hash: ".$hash2;

echo "<p>------------------------------<p>";

if(password_verify($senha2, $hash2)){
    echo 'senha correta';
} else {
    echo 'senha errada!';
}

echo "<p>------------------------------<p>";

//não mais recomendado
$senha3 = '1234567';

$hash3 = md5($senha3);

echo $hash3;




































