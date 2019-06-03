<?php

/*
 * Class model da tabela projetointegrador do db
 * 
 * @author Marco Antonio
 */

class Jornalista_model extends CI_Model {
    
    const minhasenha = 'projetoMM2019';
   
    function getAll() {
        //define os campos que serão selecionados

        $query = $this->db->get('jornalista');

        //result ja nos retorna em formato de array
        return $query->result();
    }
    
    public function insert($data) {
        $data['senha'] = sha1($data['senha'] . self::minhasenha);
        $this->db->insert('jornalista', $data);
        return $this->db->affected_rows();
    }
    
    public function getOne($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('jornalista');
        return $query->row(0);
    }
    
    public function update($id, $data) {
        if ($id > 0) {
            //filtra o prova (id) que será alterado 
            $this->db->where('id', $id); // SELECT * FROM equipe WHERE id = 'valor recebido
            $data['senha'] = sha1($data['senha'] . self::minhasenha);
            //altera os dados de acordo com oq foi recebido
            $this->db->update('jornalista', $data);
            //retorno das linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
    
    public function delete($id){
        if ($id > 0){
            $this->db->where('id',$id);//acha o id para deletar
            $this->db->delete('jornalista');
            
            return $this->db->affected_rows(); //retorno das linhas afetadas
        } else {
            return false;
        }
    }
}