<?php

class Pagina_model extends CI_Model {
    
    function getEsports() {
        $this->db->select('noticia.*, categoria.nome as nomecategoria, jornalista.nome as nomejornalista');
        $this->db->from('noticia');
        $this->db->join('categoria', 'categoria.id = noticia.cd_categoria', 'inner');                        //nome da tabela no db
        $this->db->join('jornalista', 'jornalista.id = noticia.cd_jornalista', 'inner');
        $this->db->where('categoria.nome', 'E-sports');
        $this->db->order_by('data', 'desc');
        $this->db->limit(4);
        $query = $this->db->get();
        
        return $query->result();
    }
    

}
