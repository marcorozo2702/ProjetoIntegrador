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
        $this->db->join('jornalista', 'jornalista.id = noticia.cd_jornalista', 'inner');
        $this->db->order_by('data', 'desc');//nome da tabela no db
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function insert($data = array()) {
        $this->db->insert('noticia', $data); //chcma o db e insere os dados vindos do furmulario
        return $this->db->affected_rows(); //retorno das linhas afetadas
    }
    
    public function getOne($id){
        //faz o filtro por id na consulta sql
        $this->db->select('noticia.*,categoria.nome as nomecategoria, jornalista.nome as nomejornalista');
        $this->db->from('noticia');
        $this->db->join('jornalista', 'jornalista.id = noticia.cd_jornalista', 'inner');
        $this->db->join('categoria', 'categoria.id = noticia.cd_categoria', 'inner'); 
        $this->db->where('noticia.id', $id); //SELECT * FROM integrante WHERE id='valor recebido no parametro'
        //busca a prova na db respeitando o filtro
        $query = $this->db->get();
        //retorna apenas a primeira linha
        return $query->row(0);
    }
    
    public function update($id,$data = array()){
        if ($id > 0){
            //filtra o prova (id) que será alterado 
            $this->db->where('id', $id); // SELECT * FROM pontuacao + WHERE id = 'valor recebido
            //altera os dados de acordo com oq foi recebido
            $this->db->update('noticia', $data);
            //retorno das linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
    
    public function delete($id){
        if ($id > 0){
            $this->db->where('id',$id);//acha o id para deletar
            $this->db->delete('noticia');
            
            return $this->db->affected_rows(); //retorno das linhas afetadas
        } else {
            return false;
        }
    }
    
}