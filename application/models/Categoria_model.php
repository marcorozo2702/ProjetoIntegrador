<?php

/*
 * @author Marco Antonio
 */

class Categoria_model extends CI_Model {
    
    function getAll() {

        $query = $this->db->get('categoria');

        return $query->result();
    }
    
    public function insert($data = array()) {
        $this->db->insert('categoria', $data); //chcma o db e insere os dados vindos do furmulario
        return $this->db->affected_rows(); //retorno das linhas afetadas
    }
    
    public function getOne($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('categoria');
        return $query->row(0);
    }
    
}