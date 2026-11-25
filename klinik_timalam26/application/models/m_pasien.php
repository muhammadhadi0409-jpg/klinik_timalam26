<?php
class m_pasien extends CI_Model{

    function tampil_data(){
        return $this->db->get('pasien');
    }

    function insert_data ($data){
        return $this->db->insert('pasien',$data);
    }

    function edit_data ($where){
        return $this->db->get_where('pasien', $where);
    }
}