<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tamu extends CI_Controller {
 
	public function __construct()
    {
        parent::__construct();
        $this->load->model(['tamu_model','Dropdown_model']);
        $this->load->library('form_validation');
		
    }

	public function create()
	{
		$datakota['datakota'] = $this->Dropdown_model->tampil_kota();
		$datakota['datakecamatan'] = $this->Dropdown_model->tampil_kecamatan();
		$datakota['datakelurahan'] = $this->Dropdown_model->tampil_kelurahan();
		$this->load->view('tamu/create',$datakota);
	}

	public function listKecamatan(){
		$idkota = $this->input->post('kota');
		$getdatakecamatan = $this->Dropdown_model->kecamatanByKota($idkota);
		echo json_encode($getdatakecamatan);
	}

	public function listKelurahan(){
		$idkecamatan = $this->input->post('kecamatan');
		$getdatakelurahan = $this->Dropdown_model->kelurahanByKecamatan($idkecamatan);
		echo json_encode($getdatakelurahan);
	}

	public function save()
	{
		//$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('nomorktp','Nomor KTP','required');
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('nomorhp','Nomor HP','required');
		$this->form_validation->set_rules('jeniskelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('keperluan','Keperluan','required');
		if ($this->form_validation->run()==true)
        {
			//$data['tanggal'] = $this->input->post('tanggal');
			$data['nomorktp'] = $this->input->post('nomorktp');
			$data['nama'] = $this->input->post('nama');
			$data['kota'] = $this->input->post('kota');
			$data['kecamatan'] = $this->input->post('kecamatan');
			$data['kelurahan'] = $this->input->post('kelurahan');
			$data['alamat'] = $this->input->post('alamat');
			$data['nomorhp'] = $this->input->post('nomorhp');
			$data['jeniskelamin'] = $this->input->post('jeniskelamin');
			$data['keperluan'] = $this->input->post('keperluan');
			$this->tamu_model->save($data);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil di simpan')</script>";
			}
			redirect('http://localhost/resepsionis-app/');
			echo "<script>alert('Input data berhasil');</script>";
		}
		else
		{
			$this->load->view('tamu/create');
		}
	}
}