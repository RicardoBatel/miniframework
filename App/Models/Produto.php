<?php

namespace App\Models;

use MF\Model\Model;

class Produto extends Model {

    public function getProdutos() {

        //utilizar a instancia de PDO contida no atributo $db e fz uma query no banco
        $query = "select id, descricao, preco from tb_produtos";
        return $this->db->query($query)->fetchAll();
    }
}

?>