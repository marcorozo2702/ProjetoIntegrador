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
<<<<<<< HEAD
=======

    public function update($id,$data = array()){
        if ($id > 0){
            //filtra o prova (id) que será alterado 
            $this->db->where('id', $id);
            $this->db->update('categoria', $data);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id){
        if ($id > 0){
            $this->db->where('id',$id);
            $this->db->delete('categoria');
            
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
>>>>>>> dbd882583a55d61b7dd1baf1289847080539678f
    
}