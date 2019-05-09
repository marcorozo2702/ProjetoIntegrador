<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prova extends CI_Controller {

    public function __construct() {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        //chama o método que faz a validação de login de usuario
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    // o metodo index é o metodo chamado por padrao
    //quando nenhum metodo é definido na URL da requisição
    public function index() {
        $this->listar();
    }

    public function listar() {

        //carrega o model pelo nome ("Prova_model") ou pelo apelido ("gm")
        $this->load->model('Prova_model', 'gm');

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Prova_model
        $data['provas'] = $this->gm->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Header');
        $this->load->view('ListaProvas', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        //fazendo a validação
        $this->form_validation->set_rules('nome', 'nome', 'required'); //nome do campo, id do campo, se é requirido ou não
        $this->form_validation->set_rules('tempo', 'tempo', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('NIntegrantes', 'NIntegrantes', 'required');

        //validação do preenchimento
        if ($this->form_validation->run() == false) {
            //recarrega o formulario se não passar na validação dos dados
            $this->load->view('Header');
            $this->load->view('FormProva');
            $this->load->view('Footer');
        } else {
            //carrega o model Prova
            $this->load->model('Prova_model');

            //pega os dados com POST
            $data = array(
                'nome' => $this->input->post('nome'),
                'tempo' => $this->input->post('tempo'),
                'descricao' => $this->input->post('descricao'),
                'NIntegrantes' => $this->input->post('NIntegrantes')
            );

            //chama o metodo insert do Model passando os dados recebidos por POST para gravar no db, e ja vê as linhas afetadas
            if ($this->Prova_model->insert($data)) {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Prova registrada!</div>');
                redirect('Prova/listar'); //*Se der certo manda para a lista
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar prova!</div>');
                redirect('Prova/cadastrar'); //se nao der certo manda de volta para o cadastro
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->load->model('Prova_model');

            //regras de validação
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('tempo', 'tempo', 'required');
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            $this->form_validation->set_rules('NIntegrantes', 'NIntegrantes', 'required');

            //valida se passou na validação anterior
            if ($this->form_validation->run() == false) {
                //monta uma variavel ($data) para mandar dados para a view e chama o metodo getOnde(pegar 1) do Prova_model
                //para resgatar os dados da prova a ser alterada
                $data['prova'] = $this->Prova_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormProva', $data); //carrega a view do formulario
                $this->load->view('Footer');
            } else {
                //resgata os dados inseridos por POST
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'tempo' => $this->input->post('tempo'),
                    'descricao' => $this->input->post('descricao'),
                    'NIntegrantes' => $this->input->post('NIntegrantes')
                );

                if ($this->Prova_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Prova alterada.</div>');
                    redirect('Prova/listar');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Ocorreu um erro ao alterar.</div><br><br>');
                    redirect('Prova/alterar/' . $id);
                }
            }
        } else {
            redirect('Prova/listar');
        }
    }

    public function deletar($id) {
        if ($id > 0) {
            $this->load->model('Prova_model');

            //manda para o model deletar e ja valida o retorno para saber se funcionou
            if ($this->Prova_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Sucesso ao deletar.</div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Falha ao deletar.</div>');
            }
            redirect('Prova/listar');
        }
    }

}
