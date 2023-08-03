<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;


//Models
use App\Models\Produto;//Para utilizar a classe produto do arquivo produto
use App\Models\Info;

class IndexController extends Action {

	public function index() {
        
        $produto = Container::getModel('Produto');

        $produtos = $produto->getProdutos();//Neste ponto a controller está pegando os dados que está no model

        $this->view->dados = $produtos;//Realiza esta atribuição dos dados que foram herdados da Action

        $this->render('index', 'layout1');//O layout1 está em MF Controller Action.php
        //O layout é para ser utilizado como um cabeçalho e roda pé fixo
        //Submete os dados coletados no model para a view
    }

	public function sobreNos() {
        //$this->view->dados = array('Teclado', 'celular', 'Notebook');

        $info = Container::getModel('Info');

        $infos = $info->getInfo();//Neste ponto a controller está megando os dados que está no model

        $this->view->dados = $infos;//Realiza esta atribuição dos dados que foram herdados da Action


        $this->render('sobreNos', 'layout2');
    }

    public function contateNos() {
        $this->view->dados = "21-99998889";
        $this->render('contateNos');
	}

    public function erro(){
        $this->render('erro');
    }


}


?>
