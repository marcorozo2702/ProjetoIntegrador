<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        $this->load->model('Usuario_model');
    }

    public function index() {
        $this->load->view('Login');
    }

    public function login() {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Usuario/Login');
        } else {

            //busca no banco de dados, atraves do Model, saber se existe o usuario com este email e senha recebidos por post
            $usuario = $this->Usuario_model->getUsuario(
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
                redirect($this->config->base_url() . 'Usuario/login');
            }
        }
    }

    //Método responsavel por fazer o logout da sessao do usuario destruindo-a
    public function sair() {
        //apaga todo o conteudo da sessão do usuario
        $this->session->sess_destroy();
        redirect($this->config->base_url() . 'Usuario/Login');
    }

    public function listar() {

        //chama o método que faz a validação de login de usuario
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Integrante_model
        $data['usuario'] = $this->Usuario_model->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Header');
        $this->load->view('Usuario/ListaUsuarios', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        if ($this->session->userdata('admin') == '1') {

            //chama o método que faz a validação de login de usuario
            $this->load->model('Usuario_model');
            $this->Usuario_model->verificaLogin();

            //fazendo a validação
            $this->form_validation->set_rules('nome', 'nome', 'required'); //nome do campo, id do campo, se é requirido ou não
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('senha', 'senha', 'required');

            //validação do preenchimento
            if ($this->form_validation->run() == false) {

                //recarrega o formulario se não passar na validação dos dados
                $this->load->view('Header');
                $this->load->view('Usuario/FormUsuario');
                $this->load->view('Footer');
            } else {

                //pega os dados com POST
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'email' => $this->input->post('email'),
                    'senha' => $this->input->post('senha')
                );

                //chama o metodo insert do Model passando os dados recebidos por POST para gravar no db, e ja vê as linhas afetadas
                if ($this->Usuario_model->insert($data)) {
                    //salva uma mensagem na sessão
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Novo usuario registrado!</div>');
                    redirect('Usuario/listar'); //*Se der certo manda para a lista
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar nopvo usuario!</div>');
                    redirect('Usuario/cadastrar'); //se nao der certo manda de volta para o cadastro
                }
            }
        } else {
            $this->session->set_flashdata('mensagem', '<div class="alert alert-danger">SEM PERMISSÃO PARA DELETAR.</div>');
        }
        redirect('Usuario/listar');
    }

    public function alterar($id) {
        if ($this->session->userdata('admin') == '1') {

            //chama o método que faz a validação de login de usuario
            $this->load->model('Usuario_model');
            $this->Usuario_model->verificaLogin();

            if ($id > 0) {

                //regras de validação
                $this->form_validation->set_rules('nome', 'nome', 'required');
                $this->form_validation->set_rules('email', 'email', 'required');
                $this->form_validation->set_rules('senha', 'senha', 'required');

                //valida se passou na validação anterior
                if ($this->form_validation->run() == false) {
                    //monta uma variavel ($data) para mandar dados para a view e chama o metodo getOnde(pegar 1) do Prova_model
                    //para resgatar os dados da Usuario a ser alterada
                    $data['usuario'] = $this->Usuario_model->getOne($id);
                    $this->load->view('Header');
                    $this->load->view('Usuario/FormUsuario', $data); //carrega a view do formulario
                    $this->load->view('Footer');
                } else {
                    //resgata os dados inseridos por POST
                    $data = array(
                        'nome' => $this->input->post('nome'),
                        'email' => $this->input->post('email'),
                        'senha' => $this->input->post('senha')
                    );

                    if ($this->Usuario_model->update($id, $data)) {
                        $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Usuario alterado.</div>');
                        redirect('Usuario/listar');
                    } else {
                        $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Ocorreu um erro ao alterar.</div><br><br>');
                        redirect('Usuario/alterar/' . $id);
                    }
                }
            }
        } else {
            $this->session->set_flashdata('mensagem', '<div class="alert alert-danger">SEM PERMISSÃO PARA DELETAR.</div>');
        }
        redirect('Usuario/listar');
    }

    public function deletar($id) {
        if ($this->session->userdata('admin') == '1') {

            //chama o método que faz a validação de login de usuario
            $this->load->model('Usuario_model');
            $this->Usuario_model->verificaLogin();

            if ($id > 0) {
                $this->load->model('Usuario_model');

                //manda para o model deletar e ja valida o retorno para saber se funcionou
                if ($this->Usuario_model->delete($id)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Sucesso ao deletar.</div>');
                    if ($id == $this->session->userdata('idUsuario')) {
                        $this->session->sess_destroy();
                    }
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger">Falha ao deletar.</div>');
                }
            }
        } else {
            $this->session->set_flashdata('mensagem', '<div class="alert alert-danger">SEM PERMISSÃO PARA DELETAR.</div>');
        }
        redirect('Usuario/listar');
    }

}
