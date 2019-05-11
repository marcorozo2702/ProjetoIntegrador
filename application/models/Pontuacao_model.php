<?php

class Pontuacao_model extends CI_Model {

    //método que realiza a busca de TODOS(ALL) as provas no db
    function getAll() {
        //define os campos que serão selecionados
        $this->db->select('pontuacao.*, equipe.nome as nomeequipe, prova.nome as nomeprova, usuario.nome as nomeusuario');

        //define a tabela que será chamada no FROM do select
        $this->db->from('pontuacao');

        //realiza o inner join da tabela cliente
        //1° parametro é a tabela -- 2° param. é os campos q se relacionam -- 3° é o tipo do join (inner, left, right)
        $this->db->join('equipe', 'equipe.id = pontuacao.id_equipe', 'inner');                        //nome da tabela no db
        $this->db->join('prova', 'prova.id = pontuacao.id_prova', 'inner');                        //nome da tabela no db
        $this->db->join('usuario', 'usuario.id = pontuacao.id_usuario', 'inner');                        //nome da tabela no db
        $query = $this->db->get();

        //result ja nos retorna em formato de array
        return $query->result();
    }
    
    public function insert($data = array()){
        $this->db->insert('pontuacao', $data); //chcma o db e insere os dados vindos do furmulario
        return $this->db->affected_rows(); //retorno das linhas afetadas
    }
    
    public function getOne($id){
        //faz o filtro por id na consulta sql
        $this->db->where('id', $id); //SELECT * FROM integrante WHERE id='valor recebido no parametro'
        //busca a prova na db respeitando o filtro
        $query = $this->db->get('pontuacao');
        //retorna apenas a primeira linha
        return $query->row(0);
    }
    
    public function update($id,$data = array()){
        if ($id > 0){
            //filtra o prova (id) que será alterado 
            $this->db->where('id', $id); // SELECT * FROM pontuacao + WHERE id = 'valor recebido
            //altera os dados de acordo com oq foi recebido
            $this->db->update('pontuacao', $data);
            //retorno das linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
    
    public function delete($id){
        if ($id > 0){
            $this->db->where('id',$id);//acha o id para deletar
            $this->db->delete('pontuacao');
            
            return $this->db->affected_rows(); //retorno das linhas afetadas
        } else {
            return false;
        }
    }
    

}
