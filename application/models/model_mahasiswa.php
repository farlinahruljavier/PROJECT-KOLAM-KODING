<?php

class Model_mahasiswa extends CI_model
{
    public function getDataMahasiwa(){
        $this->db->select("*");
        $this->db->from('db_mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }
    public function insertDataMhs($data){
        $this->db->insert('db_mahasiswa',$data);
    }
    public function editDataMhs($data, $id){
        $this->db->where('nim', $id);
        $this->db->update('db_mahasiswa', $data);
    }
    public function getMhsDetail($id){
        $this->db->where('nim',$id);
        $query = $this->db->get('db_mahasiwa');
        return $query->row();
    }
}
