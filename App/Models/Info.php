<?php

namespace App\Models;

use MF\Model\Model;

class Info extends Model{    

    public function getInfo() {

        //utilizar a instancia de PDO contida no atributo $db e fz uma query no banco
        $query = "select titulo, descricao from tb_info";
        return $this->db->query($query)->fetchAll();
    }
}

?>