<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        $this->load->model('Noticia_model');
        $this->load->model('Pagina_model');
        $this->load->model('Categoria_model');
        
        
    }
    
    public function index() {
        $this->listar();
    }
    
    public function listar() {

        
        $data['noticias'] = $this->Noticia_model->getAll(4);
        $data['categorias'] = $this->Categoria_model->getAll();
        $data['eSports'] = $this->Pagina_model->getEsports();
        $data['esportes'] = $this->Pagina_model->getEsportes();
       

        //chama a view passando o conteudo listado (getAll=buscar todos) da variavel $data (variavel que se refere ao banco de dados)
         $this->load->view('Pagina/Header', $data);
        $this->load->view('Pagina/Inicio', $data);
        $this->load->view('Footer/Footer');
    }
    
    public function vizualizar($id) {
        if ($id > 0) {
            $data['noticia'] = $this->Noticia_model->getOne($id);
            $data['categorias'] = $this->Categoria_model->getAll();
            $data['sugestao'] = $this->Pagina_model->getSugestao($id);
            $this->load->view('Pagina/Header', $data);
            $this->load->view('Pagina/Vizualiza', $data);
            $this->load->view('Footer/Footer');
            $this->Noticia_model->acesso($id);
        }
    }
    
    public function tudo(){
        $data['noticias'] = $this->Noticia_model->getAll();
        $data['categorias'] = $this->Categoria_model->getAll();
        $this->load->view('Pagina/Header', $data);
        $this->load->view('Pagina/Todas', $data);
        $this->load->view('Footer/Footer');
    }

    public function vizualizarCategoria($id){
        if ($id > 0) {
            $data['categoria'] = $this->Pagina_model->getCategoriaOne($id);
            $data['noticias'] = $this->Pagina_model->getCategoria($id);
            $data['categorias'] = $this->Categoria_model->getAll();
            $this->load->view('Pagina/Header', $data);
            $this->load->view('Pagina/Categorias', $data);
            $this->load->view('Footer/Footer');
        } 
    }
    
}