<?php
/* SOLID
D - Dependency inversion Principle (Princípio da inversão da dependência)
*/
interface DBConnection {
    public function connect();
}

class MySqlConnection implements DBConnection {
    public function connect(){}
}


class OracleConnection implements DBConnection {
    public function connect(){}
}

class usuarioDao{
    private $db;

    public function __construct(DBConnection $dbCon){
        $this->db = $dbCon;
    }
}


$dbCon = new MySqlConnection();

$usuarioDao = new UsuatioDao($dbCon);
$usuarioDao2 = new UsuatioDao($dbCon);

























