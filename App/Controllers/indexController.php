<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

//os models
use App\Models\Produto;
use App\Models\Info;


class IndexController extends Action {

    public function index() {

        $produto = Container::getModel('Produto');
       
        //criar métodos que vão manipular os dados do banco a partir da instância produto
        $produtos = $produto->getProdutos();

        //utilizando o atributo $this->view->dados para atribuir a relação de $produto
        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos() {

        $info = Container::getModel('Info');

        $informacoes = $info->getInfo();

        $this->view->dados = $informacoes;

        $this->render('sobreNos', 'layout1');
        
    }
    
}

?>