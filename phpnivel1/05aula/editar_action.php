<?php

require 'config.php';
require 'dao/usuarioDaoMySql.php';

$usuarioDao = new UsuarioDaoMySql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email){

    //$usuario = $usuarioDao->findById($id);

    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($name);
    $usuario->setEmail($email);

    $usuarioDao->update($usuario);
   

    header("Location: index.php");
    exit;

} else {
    header("Location: editar.php?id=".$id);
    exit;
}













