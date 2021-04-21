<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Satpam extends CI_Controller {
 
	public function __construct()
    {
        parent::__construct();
        // $this->load->model(['tamu_model','Dropdown_model']);
        $this->load->library('form_validation');
		
    }

	public function index()
	{
		$this->load->view('satpam/login');
	}

    public function laporan() {
        $this->load->view('satpam/laporan');
    }
}