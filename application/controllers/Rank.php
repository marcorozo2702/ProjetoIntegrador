<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rank extends CI_Controller {

    public function __construct() {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        //chama o método que faz a validação de login de usuario
        $this->load->model('Usuario_model');
        $this->load->model('Rank_model', 'rm'); //carrega o model pelo nome ("Rank_model") ou pelo apelido ("em")
        $this->Usuario_model->verificaLogin();
    }
    
    // o metodo index é o metodo chamado por padrao
    public function index() {
        $this->listar();
    }
    
    public function listar() {

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Equipe_model
        $data['pontuacao'] = $this->rm->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Header');
        $this->load->view('Ranking/ListaRank', $data);
        $this->load->view('Footer');
    }
    
    
    
}