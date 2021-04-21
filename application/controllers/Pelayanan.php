<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pelayanan extends CI_Controller {
 
	public function __construct()
    {
        parent::__construct();
         $this->load->model(['pelayanan_model']);
        $this->load->library('form_validation');
		
    }

	public function index()
	{
		$this->load->view('pelayanan/survey');
	}

    public function save() {
        $this->form_validation->set_rules('survey-radio','Icon Survey','required');
        if ($this->form_validation->run()==true)
        {
			$data['tanggal'] = $this->input->post('tanggal');
			$data['hasilsurvey'] = $this->input->post('survey-radio');
			$data['kritiksaran'] = $this->input->post('kritiksaran');
			$this->pelayanan_model->save($data);
			redirect('http://localhost/resepsionis-app/');
		}
		else
		{
			$this->load->view('pelayanan/survey');
		}
    }
}