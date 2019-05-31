<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
    
    public function __construct() {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        //chama o método que faz a validação de login de usuario
        $this->load->model('Categoria_model');
    }
    
     public function index() {
        $this->lista();
    }

    public function lista() {
        $this->listar();
    }

    public function listar() {

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Integrante_model
        $data['categorias'] = $this->Categoria_model->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Categoria/Lista', $data);
    }
    
    public function cadastro() {
        $this->cadastrar();
    }
    
    public function cadastrar() {
        
        $this->form_validation->set_rules('nome', 'nome', 'required');

        //validação do preenchimento
        if ($this->form_validation->run() == false) {

            $data['categorias'] = $this->Categoria_model->getAll();
            $this->load->view('Categoria/Cadastro', $data);
        } else {

            $this->load->model('Categoria_model');

            $data = array(
                'nome' => $this->input->post('nome')
            );

            if ($this->Categoria_model->insert($data)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Jornalista inserido.</div>');
                redirect('Categoria/lista');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar jornalista.</div>');
                redirect('Categoria/cadastro'); //se nao der certo manda de volta para o cadastro
            }
        }
    }
}