<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);

if($nome && $senha && $email){

    echo 'NOME: '. $nome ."<br/>";
    echo 'EMAIL: '. $email."<br>";
    echo 'SENHA: '. $senha;

} else {
    //echo 'NÃO EVIOU';
    header("Location: index.php");
    exit;
}

/*
FILETR_VALIDATE_EMAIL
FILETR_VALIDATE_FLOAT
FILETR_VALIDATE_IP
FILETR_VALIDATE_URL

FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_STRING
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_URL
FILTER_SANITIZE_NUMBER_FLOAT


*/






?>