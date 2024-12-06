<?php 

class HomeController extends Controller{

    public function index(){

        $dados = array();

        $dados['mensagem'] = 'Bem-vindo a InnovaClick';
        $dados['nome'] = 'Henryque';

        //var_dump($dados);

        $this->carregarViews('home',$dados);
        

    }
}