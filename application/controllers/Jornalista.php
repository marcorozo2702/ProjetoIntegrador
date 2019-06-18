<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jornalista extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jornalista_model');
    }

    public function index() {
        $this->login();
    }

    public function login() {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Jornalista/Login');
        } else {

            $usuario = $this->Jornalista_model->getUsuario(
                    $this->input->post('email'), $this->input->post('senha')
            );
            //valida se retornoun algum registro, quer dizer que o usuário é existente
            if ($usuario) {
                $data = array(
                    'idUsuario' => $usuario->id,
                    'email' => $usuario->email,
                    'logado' => TRUE,
                    'admin' => $usuario->admin
                );
                //mandamos o CodeIgniter salvar na sessão os dados do usuario percebva quie o metodo set_userdata é diferente do método set_flashdata,
                //pois ele slva dados permanentes enquanto durar a sessão
                $this->session->set_userdata($data);
                //abre a pagina principal(padrão) do sistema
                redirect($this->config->base_url());
            } else {
                $this->session->set_flashdata('mensagem', 'Usuário e Senha incorretos.');
                //redireciona para a pagina de login OBRIGANDO fazer o login.
                redirect($this->config->base_url() . 'Jornalista/login');
            }
        }
    }

    public function sair() {
        //apaga todo o conteudo da sessão do usuario
        $this->session->sess_destroy();
        redirect($this->config->base_url() . 'Jornalista/Login');
    }

    public function lista() {
        $this->listar();
    }

    public function listar() {

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Integrante_model
        $data['jornalistas'] = $this->Jornalista_model->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Header/Header');
        $this->load->view('Jornalista/Lista', $data);
        $this->load->view('Footer/Footer');
    }

    public function cadastro() {
        $this->cadastrar();
    }

    public function cadastrar() {

        //fazendo a validação
        $this->form_validation->set_rules('nome', 'nome', 'required'); //nome do campo, id do campo, se é requirido ou não
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        //validação do preenchimento
        if ($this->form_validation->run() == false) {

            $data['jornalistas'] = $this->Jornalista_model->getAll();
            $this->load->view('Header/Header');
            $this->load->view('Jornalista/Cadastro', $data);
            $this->load->view('Footer/Footer');
        } else {

            $this->load->model('Jornalista_model');

            $data = array(
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'senha' => $this->input->post('senha')
            );

            if ($this->Jornalista_model->insert($data)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Jornalista inserido.</div>');
                redirect('Jornalista/lista');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar jornalista.</div>');
                redirect('Jornalista/cadastro'); //se nao der certo manda de volta para o cadastro
            }
        }
    }

    public function altera() {
        $this->alterar($id);
    }

    public function alterar($id) {


        $this->Jornalista_model->verificaLogin();

        if ($id > 0) {

            //regras de validação
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('senha', 'senha', 'required');

            //valida se passou na validação anterior
            if ($this->form_validation->run() == false) {
                //monta uma variavel ($data) para mandar dados para a view e chama o metodo getOnde(pegar 1) do Prova_model
                //para resgatar os dados da prova a ser alterada
                $data['jornalista'] = $this->Jornalista_model->getOne($id);
                $this->load->view('Header/Header');
                $this->load->view('Jornalista/Altera', $data); //carrega a view do formulario
                $this->load->view('Footer/Footer');
            } else {
                //resgata os dados inseridos por POST
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'email' => $this->input->post('email'),
                    'senha' => $this->input->post('senha')
                );

                if ($this->Jornalista_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Jornalista alterado.</div>');
                    redirect('Jornalista/lista');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Ocorreu um erro ao alterar.</div><br><br>');
                    redirect('Jornalista/altera/' . $id);
                }
            }
        } else {
            redirect('Jornalista/lista');
        }
    }

    public function deletar($id) {
        if ($this->session->userdata('admin') == '1') {
            $this->Jornalista_model->verificaLogin();

            if ($id > 0) {

                //manda para o model deletar e ja valida o retorno para saber se funcionou
                if ($this->Jornalista_model->delete($id)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Sucesso ao deletar.</div>');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Falha ao deletar.</div>');
                }
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Falha ao deletar.</div>');
                redirect('Jornalista/lista');
            }
        }
    }

}
