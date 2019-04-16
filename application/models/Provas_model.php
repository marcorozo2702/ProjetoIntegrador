<?php

class Prova_model extends CI_Model{

    //método que realiza a busca de TODOS(ALL) as provas no db
    function getAll() {
                                //nome da tabela no db
        $query = $this->db->get('prova');
        
                        //result ja nos retorna em formato de array
        return $query->result();
        
    }
}
