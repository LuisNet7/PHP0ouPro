<?php

$pdo = new PDO("mysql:dbname=test;hot=localhost","root", "");

$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll();

echo "<pre>";
print_r($dados);



















