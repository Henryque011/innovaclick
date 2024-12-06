<?php 

class SobreController extends Controller{

    public function index(){
        $dados = array();
        //$dados['titulos'] = 'Sobre Nós - InnovaClick';

        $this->carregarViews('sobre',$dados);

    }
}