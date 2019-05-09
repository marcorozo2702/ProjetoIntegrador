<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index() {
        $this->load->view('Login');
    }

    public function login() {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Login');
        } else {
            $this->load->model('Usuario_model');

            //busca no banco de dados, atraves do Model, saber se existe o usuario com este email e senha recebidos por post
            $usuario = $this->Usuario_model->getUsuario(
                    $this->input->post('email'), $this->input->post('senha')
            );
            //valida se retornoun algum registro, quer dizer que o usuário é existente
            if ($usuario) {
                $data = array(
                    'idUsuario' => $usuario->id,
                    'email' => $usuario->email,
                    'logado' => TRUE
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
    public function sair(){
        //apaga todo o conteudo da sessão do usuario
        $this->session->sess_destroy();
        redirect($this->config->base_url().'Usuario/Login');
    }

}
