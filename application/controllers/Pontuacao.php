<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pontuacao extends CI_Controller {

    public function __construct() {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        //chama o método que faz a validação de login de usuario
        $this->load->model('Pontuacao_model', 'pm');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    // o metodo index é o metodo chamado por padrao
    //quando nenhum metodo é definido na URL da requisição
    public function index() {
        $this->listar();
    }

    public function listar() {

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Pontuacao_model
        $data['pontuacao'] = $this->pm->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Header');
        $this->load->view('Pontuacao/ListaPontuacao', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        //fazendo a validação
        $this->form_validation->set_rules('pontuacao', 'pontuacao', 'required'); //nome do campo, id do campo, se é requirido ou não
        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
        $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
        $this->form_validation->set_rules('id_usuario', 'id_usuario', 'required');

        //validação do preenchimento
        if ($this->form_validation->run() == false) {

            //carrega o model pelo nome ("Equipe_model") ou pelo apelido ("em")
            $this->load->model('Equipe_model', 'em');
            $this->load->model('Prova_model');
            $this->load->model('Usuario_model', 'um');

            //$data precisa ser em formato de array para ser passada para a lista na view
            //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Equipe_model
            $data['equipes'] = $this->em->getAll();
            $data['provas'] = $this->Prova_model->getAll();
            $data['usuario'] = $this->um->getAll();
            //recarrega o formulario se não passar na validação dos dados


            $this->load->view('Header');
            $this->load->view('Pontuacao/FormPontuacao', $data);
            $this->load->view('Footer');
        } else {
            //carrega o model pontuacao
            $this->load->model('Pontuacao_model');

            //pega os dados com POST
            $data = array(
                'id_equipe' => $this->input->post('id_equipe'),
                'id_prova' => $this->input->post('id_prova'),
                'id_usuario' => $this->input->post('id_usuario'),
                'pontos' => $this->input->post('pontuacao'),
                'data_hora' => $this->input->post('data_hora')
            );

            //chama o metodo insert do Model passando os dados recebidos por POST para gravar no db, e ja vê as linhas afetadas
            if ($this->Pontuacao_model->insert($data)) {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Pontuacao registrada!</div>');
                redirect('Pontuacao/listar'); //*Se der certo manda para a lista
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar pontuacao!</div>');
                redirect('Pontuacao/cadastrar'); //se nao der certo manda de volta para o cadastro
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->load->model('Pontuacao_model');

            //regras de validação
            $this->form_validation->set_rules('pontuacao', 'pontuacao', 'required');
            $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
            $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
            $this->form_validation->set_rules('id_usuario', 'id_usuario', 'required');

            //valida se passou na validação anterior
            if ($this->form_validation->run() == false) {
                //monta uma variavel ($data) para mandar dados para a view e chama o metodo getOnde(pegar 1) do Prova_model
                //para resgatar os dados da prova a ser alterada
                $data['pontuacao'] = $this->Pontuacao_model->getOne($id);

                //carrega o model pelo nome ("Equipe_model") ou pelo apelido ("em")
                $this->load->model('Equipe_model', 'em');
                $this->load->model('Prova_model');
                $this->load->model('Usuario_model', 'um');

                //$data precisa ser em formato de array para ser passada para a lista na view
                //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo Equipe_model
                $data['equipes'] = $this->em->getAll();
                $data['provas'] = $this->Prova_model->getAll();
                $data['usuario'] = $this->um->getAll();

                $this->load->view('Header');
                $this->load->view('Pontuacao/FormPontuacao', $data); //carrega a view do formulario
                $this->load->view('Footer');
            } else {
                //resgata os dados inseridos por POST
                $data = array(
                    'id_equipe' => $this->input->post('id_equipe'),
                    'id_prova' => $this->input->post('id_prova'),
                    'id_usuario' => $this->input->post('id_usuario'),
                    'pontos' => $this->input->post('pontuacao'),
                    'data_hora' => $this->input->post('data_hora')
                );

                if ($this->Pontuacao_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Pontuacao alterada.</div>');
                    redirect('Pontuacao/listar');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Ocorreu um erro ao alterar.</div><br><br>');
                    redirect('Pontuacao/alterar/' . $id);
                }
            }
        } else {
            redirect('Pontuacao/listar');
        }
    }
    
    public function deletar($id) {
        if ($id > 0) {
            $this->load->model('Pontuacao_model');

            //manda para o model deletar e ja valida o retorno para saber se funcionou
            if ($this->Pontuacao_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Sucesso ao deletar.</div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Falha ao deletar.</div>');
            }
            redirect('Pontuacao/listar');
        }
    }

}
