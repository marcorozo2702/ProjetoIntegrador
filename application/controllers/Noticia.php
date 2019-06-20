<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

    public function __construct() {
        //chama o construtos da classe pai (CI_Controller)
        parent::__construct();
        //chama o método que faz a validação de login de usuario
        $this->load->model('Noticia_model');
        $this->load->view('Header/Header');
    }

    public function index() {
        $this->lista();
    }

    public function lista() {
        $this->listar();
    }

    public function listar() {

        //$data precisa ser em formato de array para ser passada para a lista na view
        //chamamos o metodo getAll (para buscar todos, já que e uma listagem) do arquivo
        $data['noticias'] = $this->Noticia_model->getAll();

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Noticia/Lista', $data);
        $this->load->view('Footer/Footer');
    }

    public function cadastro() {
        $this->cadastrar();
    }

    public function cadastrar() {
        //fazendo a validação
        $this->form_validation->set_rules('titulo', 'titulo', 'required'); //nome do campo, id do campo, se é requirido ou não
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('categoria', 'categoria', 'required');
        $this->form_validation->set_rules('jornalista', 'jornalista', 'required');
        date_default_timezone_set('America/Sao_paulo');

        //validação do preenchimento
        if ($this->form_validation->run() == false) {

            $this->load->model('Categoria_model');
            $this->load->model('Jornalista_model');

            $data['noticias'] = $this->Noticia_model->getAll();
            $data['categorias'] = $this->Categoria_model->getAll();
            $data['jornalistas'] = $this->Jornalista_model->getAll();

            $this->load->view('Noticia/Cadastro', $data);
            $this->load->view('Footer/Footer');
        } else {

            $this->load->model('noticia_model');

            $data = array(
                'titulo' => $this->input->post('titulo'),
                'descricao' => $this->input->post('descricao'),
                'cd_categoria' => $this->input->post('categoria'),
                'cd_jornalista' => $this->input->post('jornalista'),
                'texto' => $this->input->post('texto'),
                'data' => date('Y-m-d H:i:s'),
                'hora' => date('Y-m-d H:i:s')
            );

            
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_width'] = 1920;
            $config['max_height'] = 1080;
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                //cria uma sessão com o error e redireciona
            } else {
                //pega o nome do arquivo que foi enviado e adiciona no array  $data
                $data['imagem'] = $this->upload->data('file_name');
            }

            if ($this->Noticia_model->insert($data)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Noticia inserido.</div>');
                redirect('Noticia/lista');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Erro ao registrar noticia.</div>');
                redirect('Noticia/cadastro'); //se nao der certo manda de volta para o cadastro
            }
        }
    }

    public function altera() {
        $this->alterar($id);
    }

    public function alterar($id) {
        if ($id > 0) {

            //regras de validação
            $this->form_validation->set_rules('titulo', 'titulo', 'required'); //nome do campo, id do campo, se é requirido ou não
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            $this->form_validation->set_rules('categoria', 'categoria', 'required');
            $this->form_validation->set_rules('jornalista', 'jornalista', 'required');
            date_default_timezone_set('America/Sao_paulo');

            //valida se passou na validação anterior
            if ($this->form_validation->run() == false) {

                $this->load->model('Categoria_model');
                $this->load->model('Jornalista_model');

                $data['noticia'] = $this->Noticia_model->getOne($id);
                $data['categorias'] = $this->Categoria_model->getAll();
                $data['jornalistas'] = $this->Jornalista_model->getAll();


                $this->load->view('Noticia/Altera', $data); //carrega a view do formulario
                $this->load->view('Footer/Footer');
            } else {
                //resgata os dados inseridos por POST
                $data = array(
                    'titulo' => $this->input->post('titulo'),
                    'descricao' => $this->input->post('descricao'),
                    'cd_categoria' => $this->input->post('categoria'),
                    'cd_jornalista' => $this->input->post('jornalista'),
                    'texto' => $this->input->post('texto'),
                    'data' => date('Y-m-d H:i:s')
                );

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());
                    //cria uma sessão com o error e redireciona
                } else {
                    //pega o nome do arquivo que foi enviado e adiciona no array  $data
                    $data['imagem'] = $this->upload->data('file_name');
                }

                if ($this->Noticia_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Jornalista alterado.</div>');
                    redirect('Noticia/lista');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Ocorreu um erro ao alterar.</div><br><br>');
                    redirect('Noticia/altera/' . $id);
                }
            }
        } else {
            redirect('Noticia/lista');
        }
    }

    public function deletar($id) {
        if ($id > 0) {

            $imagem = $this->Noticia_model->getOne($id);
            unlink('./uploads/' . $imagem->imagem);

            //manda para o model deletar e ja valida o retorno para saber se funcionou
            if ($this->Noticia_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success">Sucesso ao deletar.</div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger>Falha ao deletar.</div>');
            }
            redirect('Noticia/lista');
        }
    }


    public function vizualizar($id) {
        if ($id > 0) {
            $data['noticia'] = $this->Noticia_model->getOne($id);
            $this->load->view('Noticia/Vizualiza', $data);
            $this->load->view('Footer/Footer');
        }
    }

}
