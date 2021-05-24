<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Dropdown_model extends CI_Model{   

    private $tableKota = "kota";
    private $tableKecamatan = "kecamatan";
    private $tableKelurahan = "kelurahan";
   
    public function tampil_kota()
    {  
        $this->db->order_by("idkota", "asc");
        $query = $this->db->get($this->tableKota);
        return $query->result();
    }

    public function tampil_kecamatan()
    {  
        return $this->db->get($this->tableKecamatan)->result();
    }

    public function tampil_kelurahan()
    {  
        return $this->db->get($this->tableKelurahan)->result();
    }
    
    public function kecamatanByKota($idkota) {
        $this->db->from('kecamatan');
        $this->db->where('idkota', $idkota);
        $this->db->order_by('kecamatan', 'asc');
        $query = $this->db->get();

        return $query->result();
    }

    public function kelurahanByKecamatan($idkecamatan) {
        $this->db->from('kelurahan');
        $this->db->where('idkecamatan', $idkecamatan);
        $this->db->order_by('kelurahan', 'asc');
        $query = $this->db->get();
        
        return $query->result();
    }
}