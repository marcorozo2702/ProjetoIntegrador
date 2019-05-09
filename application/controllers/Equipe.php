<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Equipe extends CI_Controller {
    
    public function __construct() {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        //chama o método que faz a validação de login de usuario
        $this->load->model('Equipe_model');
        //$this->Equipe_model->verificaLogin();
    }
    
    // o metodo index é o metodo chamado por padrao
    //quando nenhum metodo é definido na URL da requisição
    public function index() {
        $this->listar();
    }
    
    public function listar() {

        //carrega o model pelo nome ("Equipe_model") ou pelo apelido ("em")
        $this->load->model('Equipe_model', 'em');

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Equipe_model
        $data['equipes'] = $this->em->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Header');
        $this->load->view('ListaEquipes', $data);
        $this->load->view('Footer');
    }
    
    public function cadastrar() {
        //fazendo a validação
        $this->form_validation->set_rules('nome', 'nome', 'required'); //nome do campo, id do campo, se é requirido ou não

        //validação do preenchimento
        if ($this->form_validation->run() == false) {
            //recarrega o formulario se não passar na validação dos dados
            $this->load->view('Header');
            $this->load->view('FormEquipe');
            $this->load->view('Footer');
        } else {
            //carrega o model Equipe
            $this->load->model('Equipe_model');

            //pega os dados com POST
            $data = array(
                'nome' => $this->input->post('nome')
            );

            //chama o metodo insert do Model passando os dados recebidos por POST para gravar no db, e ja vê as linhas afetadas
            if ($this->Equipe_model->insert($data)) {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Prova registrada!</div>');
                redirect('Equipe/listar'); //*Se der certo manda para a lista
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar prova!</div>');
                redirect('Equipe/cadastrar'); //se nao der certo manda de volta para o cadastro
            }
        }
    }
    
     public function alterar($id) {
        if ($id > 0) {
            $this->load->model('Equipe_model');

            //regras de validação
            $this->form_validation->set_rules('nome', 'nome', 'required');

            //valida se passou na validação anterior
            if ($this->form_validation->run() == false) {
                //monta uma variavel ($data) para mandar dados para a view e chama o metodo getOnde(pegar 1) do Prova_model
                //para resgatar os dados da prova a ser alterada
                $data['equipe'] = $this->Equipe_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormEquipe', $data); //carrega a view do formulario
                $this->load->view('Footer');
            } else {
                //resgata os dados inseridos por POST
                $data = array(
                    'nome' => $this->input->post('nome')
                );

                if ($this->Equipe_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Prova alterada.</div>');
                    redirect('Equipe/listar');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Ocorreu um erro ao alterar.</div><br><br>');
                    redirect('Equipe/alterar/' . $id);
                }
            }
        } else {
            redirect('Equipe/listar');
        }
    }
    
    public function deletar($id) {
        if ($id > 0) {
            $this->load->model('Equipe_model');

            //manda para o model deletar e ja valida o retorno para saber se funcionou
            if ($this->Equipe_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Sucesso ao deletar.</div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Falha ao deletar.</div>');
            }
            redirect('Equipe/listar');
        }
    }
    
}