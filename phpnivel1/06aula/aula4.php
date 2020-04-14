<?php
/*SOLID
L - Liskov Substitution Principe (Princípio da substituição da liskov)
*/

class A {
    public function getNome(){
        return "Meu nome é A";
    }
}

class B extends A {

    public function getNome(){
        return "Meu nome é B";
    }
}

function imprimenome(A $obj) {
    return $obj->getNome();
}

$obejeto1 = new A();
$obejeto2 = new B();
echo imprimenome($obejeto1)."<br>";
echo imprimenome($obejeto2)."<br>";





























