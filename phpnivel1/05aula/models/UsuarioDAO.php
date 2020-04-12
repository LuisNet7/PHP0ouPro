<?php

interface UsuarioDAO {

    public function add(Usuario $usuario);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function update(Usuario $usuario);
    public function delete($id);




}































