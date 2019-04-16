<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prova extends CI_Controller {

	// o metodo index é o metodo chamado por padrao
    //quando nenhum metodo é definido na URL da requisição
	public function index()
	{
		$this->listar();
	}
        
        public function listar(){
            
            //carrega o model pelo nome ("Gincana_model") ou pelo apelido ("gm")
            $this->load->model('Prova_model', 'gm');
            
            //$data precisa ser em formato de array para ser passada para a lista na view
            //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Gincana_model
            $data['provas'] = $this->gm->getAll();
            
            //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
            $this->load->view('ListaProvas', $data);
        }
}
