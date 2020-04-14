<?php
/*
SOLID
O - Open-Closed Principle (princípio Aberto-Fechado)
*/

interface Remuneravel {
    public function remuneracao();
}

class ContratoClt implements Remuneravel {
    public function remuneracao(){}
}

class Estagio implements Remuneravel {
    public function remuneracao(){}
}

class Contratopj implements Remuneravel {
    public function remuneracao(){}
}

class FolhaDePagamento {

    public function calcular( Remuneravel $funcionario) {
        return $funcionario->remuneracao();
    }
}


























