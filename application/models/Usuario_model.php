<?php

/*
 * Class model da tabela usuario do db
 * 
 * @author Marco
 */

class Usuario_model extends CI_Model{

    //método que busca o usuario no banco de dados
    //recebe como parametro o email e a senha
    public function getUsuario($email, $senha) {
        $this->db->where('email', $email);
        $this->db->where('senha', sha1($senha . 'marcoSENAC2019'));

        $query = $this->db->get('usuario');
        return $query->row(0);
    }
    
    //Método valida na sessão se o usuário esta logado
    public function verificaLogin() {
        $logado = $this->session->userdata('logado');
        $idUsuario = $this->session->userdata('idUsuario');

        //verifica se o status este setado, ou não esta true, ou nao tem idUsuario
        if ((!isset($logado)) || ($logado != true) || ($idUsuario <= 0)) {
            //redireciona obrigando o login
            redirect($this->config->base_url() . 'Usuario/login');
        }
    }

}

