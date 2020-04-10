<?php

$pdo = new PDO("mysql:dbname=test;hot=localhost","root", "");

$sql = $pdo->query('SELECT * FROM usuarios');

echo "Total: ".$sql->rowCount();

$dados = $sql->fetchAll( PDO::FETCH_ASSOC );

echo "<pre>";
print_r($dados);



















