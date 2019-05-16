<?php

class Rank_model extends CI_Model {

    //método que realiza a busca de TODOS(ALL) as provas no db
    function getAll() {
        //define os campos que serão selecionados
        $this->db->select('pontuacao.*, equipe.nome as nomeequipe');
        $this->db->select_SUM('pontos');
        $this->db->from('pontuacao');
        $this->db->join('equipe', 'equipe.id = pontuacao.id_equipe', 'inner');    //realiza o inner join    
        $this->db->group_by('id_equipe');
        $this->db->order_by('pontos DESC');
        $query = $this->db->get();
        

        //result ja nos retorna em formato de array
        return $query->result();
    }
}