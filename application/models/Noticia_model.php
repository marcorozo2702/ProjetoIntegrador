<?php

/*
 * Class model da tabela projetointegrador do db
 * 
 * @author Marco Antonio
 */

class Noticia_model extends CI_Model {
 
    function getAll() {
        $this->db->select('noticia.*, categoria.nome as nomecategoria, jornalista.nome as nomejornalista');
        $this->db->from('noticia');
        $this->db->join('categoria', 'categoria.id = noticia.cd_categoria', 'inner');                        //nome da tabela no db
        $this->db->join('jornalista', 'jornalista.id = noticia.cd_jornalista', 'inner');               //nome da tabela no db
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function insert($data = array()) {
        $this->db->insert('noticia', $data); //chcma o db e insere os dados vindos do furmulario
        return $this->db->affected_rows(); //retorno das linhas afetadas
    }
}