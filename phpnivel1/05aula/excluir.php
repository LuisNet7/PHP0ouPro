<?php

require 'config.php';
require 'dao/usuarioDaoMySql.php';

$usuarioDao = new UsuarioDaoMySql($pdo);


$id = filter_input(INPUT_GET, 'id');
if($id){

    $usuarioDao->delete($id);

}

    header("Location: index.php");
    exit; 


?>