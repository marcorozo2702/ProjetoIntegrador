<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Integrante extends CI_Controller {

    public function __construct() {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        //chama o método que faz a validação de login de usuario
        $this->load->model('Integrante_model');
        //$this->Equipe_model->verificaLogin();
    }

    // o metodo index é o metodo chamado por padrao
    //quando nenhum metodo é definido na URL da requisição
    public function index() {
        $this->listar();
    }

    public function listar() {

        //carrega o model pelo nome ("Integrante_model") ou pelo apelido ("em")
        $this->load->model('Integrante_model', 'im');

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Integrante_model
        $data['integrantes'] = $this->im->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Header');
        $this->load->view('ListaIntegrantes', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        //fazendo a validação
        $this->form_validation->set_rules('nome', 'nome', 'required'); //nome do campo, id do campo, se é requirido ou não
        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');

        //validação do preenchimento
        if ($this->form_validation->run() == false) {
            //recarrega o formulario se não passar na validação dos dados
            $this->load->view('Header');
            $this->load->view('FormIntegrante');
            $this->load->view('Footer');
        } else {
            //carrega o model Prova
            $this->load->model('Integrante_model');

            //pega os dados com POST
            $data = array(
                'nome' => $this->input->post('nome'),
                'data_nasc' => $this->input->post('data_nasc'),
                'id_equipe' => $this->input->post('id_equipe'),
                'rg' => $this->input->post('rg'),
                'cpf' => $this->input->post('cpf'),
            );

            //chama o metodo insert do Model passando os dados recebidos por POST para gravar no db, e ja vê as linhas afetadas
            if ($this->Integrante_model->insert($data)) {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Prova registrada!</div>');
                redirect('Integrante/listar'); //*Se der certo manda para a lista
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar prova!</div>');
                redirect('Integrante/cadastrar'); //se nao der certo manda de volta para o cadastro
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->load->model('Integrante_model');

            //regras de validação
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');

            //valida se passou na validação anterior
            if ($this->form_validation->run() == false) {
                //monta uma variavel ($data) para mandar dados para a view e chama o metodo getOnde(pegar 1) do Prova_model
                //para resgatar os dados da prova a ser alterada
                $data['integrante'] = $this->Integrante_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormIntegrante', $data); //carrega a view do formulario
                $this->load->view('Footer');
            } else {
                //resgata os dados inseridos por POST
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'data_nasc' => $this->input->post('data_nasc'),
                    'id_equipe' => $this->input->post('id_equipe'),
                    'rg' => $this->input->post('rg'),
                    'cpf' => $this->input->post('cpf')
                );

                if ($this->Integrante_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Prova alterada.</div>');
                    redirect('Integrante/listar');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Ocorreu um erro ao alterar.</div><br><br>');
                    redirect('Integrante/alterar/' . $id);
                }
            }
        } else {
            redirect('Integrante/listar');
        }
    }
    
    public function deletar($id) {
        if ($id > 0) {
            $this->load->model('Integrante_model');

            //manda para o model deletar e ja valida o retorno para saber se funcionou
            if ($this->Integrante_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Sucesso ao deletar.</div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Falha ao deletar.</div>');
            }
            redirect('Integrante/listar');
        }
    }

}
