<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tamu_model extends CI_Model
{
    private $table = "bukutamu";
    // private $tableKota = "kota";
    // private $tableKecamatan = "kecamatan";
    // private $tableKelurahan = "kelurahan";

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // public function getAllKota() {
    //     return $this->db->get('kota')->result();
    // }

    // public function getAllKecamatan() {
    //     return $this->db->get($this->tableKecamatan)->result();
    // }

    // public function getAllKelurahan() {
    //     return $this->db->get($this->tableKelurahan)->result();
    // }
}