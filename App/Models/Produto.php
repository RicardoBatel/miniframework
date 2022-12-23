<?php

namespace App\Models;

class Produto{

    protected $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

    public function getProdutos() {

        //utilizar a instancia de PDO contida no atributo $db e fz uma query no banco
        $query = "select id, descricao, preco from tb_produtos";
        return $this->db->query($query)->fetchAll();
    }
}

?>