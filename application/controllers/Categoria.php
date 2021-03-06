<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Categoria extends CI_Controller
{
    public function __construct()
    {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        //chama o método que faz a validação de login de usuario
        $this->load->model('Categoria_model');
        $this->load->view('Header/Header');
        $this->load->model('Jornalista_model');
        $this->Jornalista_model->verificaLogin();
        
    }
    public function index()
    {
        $this->lista();
    }
    public function lista()
    {
        $this->listar();
    }
    public function listar()
    {
        $data['categorias'] = $this->Categoria_model->getAll();
        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Categoria/Lista', $data);
        $this->load->view('Footer/Footer');
    }
    public function cadastro()
    {
        $this->cadastrar();
    }
    public function cadastrar()
    {
        $this->form_validation->set_rules('nome', 'nome', 'required');
        //validação do preenchimento
        if ($this->form_validation->run() == false) {
            $data['categorias'] = $this->Categoria_model->getAll();
            $this->load->view('Categoria/Cadastro', $data);
            $this->load->view('Footer/Footer');
        } else {
            $this->load->model('Categoria_model');
            $data = array(
                'nome' => $this->input->post('nome')
            );
            if ($this->Categoria_model->insert($data)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Registrado com sucesso.</div>');
                redirect('Categoria/cadastro');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar.</div>');
                redirect('Categoria/cadastro'); //se nao der certo manda de volta para o cadastro
            }
        }
    }
    public function altera()
    {
        $this->alterar($id);
    }
    public function alterar($id){
        if ($id > 0) {
            //regras de validação
            $this->form_validation->set_rules('nome', 'nome', 'required');
            //valida se passou na validação anterior
            if ($this->form_validation->run() == false) {
                //monta uma variavel ($data) para mandar dados para a view e chama o metodo getOnde(pegar 1) do Prova_model
                //para resgatar os dados da prova a ser alterada
                $data['categoria'] = $this->Categoria_model->getOne($id);
                $this->load->model('Categoria_model');
                $data['equipes'] = $this->Categoria_model->getAll();
                $this->load->view('Categoria/Altera', $data);
                $this->load->view('Footer/Footer');
            } else {
                //resgata os dados inseridos por POST
                $data = array(
                    'nome' => $this->input->post('nome')
                );
                if ($this->Categoria_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Alterado com sucesso.</div>');
                    redirect('Categoria/lista');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao alterar.</div><br><br>');
                    redirect('Categoria/alterar/' . $id);
                }
            }
        } else {
            redirect('Categoria/listar');
        }
    }
    public function deletar($id) {
        if ($id > 0) {
            if ($this->Categoria_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Sucesso ao deletar.</div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Falha ao deletar.</div>');
            }
            redirect('Categoria/lista');
        }
    }
}