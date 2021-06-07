<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tamu_model extends CI_Model
{
    private $table = "bukutamu";
    // private $tableKota = "kota";
    // private $tableKecamatan = "kecamatan";
    // private $tableKelurahan = "kelurahan";

    public function __construct()
	{
		parent::__construct();
		
	}

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

}