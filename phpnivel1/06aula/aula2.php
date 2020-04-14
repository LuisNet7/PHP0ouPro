<?php
/*
SOLID
S - Single Responsibility Principe (Princípio da responsabilidade única)

*/ 

//não criar uma classe com mais de uma responsabilidade
class Usuario {
    public function setNome() {}
    public function getNome() {}

    //manipulando banco de dados
    public function add() {}
    public function update() {}
    public function delete() {}
}

//dividindo responsabilidades
class Usuario {

    public function setNome() {}
    public function getNome() {}

}

class Usuario {

    public function add(Usuario $usuario) {}
    public function update(Usuario $usuario) {}
    public function delete(Usuario $usuario) {}

}
































