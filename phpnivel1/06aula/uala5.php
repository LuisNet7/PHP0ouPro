<?php
/* SOLID
I - Interface Segregation Priciple (Princípio da Segregação da Interface)
*/
interface Aves {
    public function setLocation($lat, $lng);
    public function render();
}

interface AvesQueVoam extends Aves {
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam {
    public function setLocation($lat, $lng){}
    public function setAltitude($alt){}
    public function render(){}
   
}


class Pinguim implements Aves {
    public function setLocation($lat, $lng){}
    public function render(){}
}

function novaAve(Aves $ave){
    $ave->reder();
}





























