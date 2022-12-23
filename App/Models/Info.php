<?php

namespace App\Models;

class Info{

    protected $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

    public function getInfo() {

        //utilizar a instancia de PDO contida no atributo $db e fz uma query no banco
        $query = "select titulo, descricao from tb_info";
        return $this->db->query($query)->fetchAll();
    }
}

?>