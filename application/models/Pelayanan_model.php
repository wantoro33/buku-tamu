<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan_model extends CI_Model {   

    private $table = "pelayanan";
    // private $tableKecamatan = "kecamatan";
    // private $tableKelurahan = "kelurahan";
   
    // public function tampil_kota()
    // {  
    //     return $this->db->get($this->tableKota)->result();
    // }

    // public function tampil_kecamatan()
    // {  
    //     return $this->db->get($this->tableKecamatan)->result();
    // }

    // public function tampil_kelurahan()
    // {  
    //     return $this->db->get($this->tableKelurahan)->result();
    // }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
 
}