<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        $this->load->view('Header/Header');
        $this->load->model('Noticia_model');
        $this->load->model('Pagina_model');
        
        
    }
    
    public function index() {
        $this->listar();
    }
    
    public function listar() {

        
        $data['noticias'] = $this->Noticia_model->getAll();
        $data['eSports'] = $this->Pagina_model->getEsports();
       

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
        $this->load->view('Pagina/Inicio', $data);
        $this->load->view('Footer/Footer');
    }
    
}