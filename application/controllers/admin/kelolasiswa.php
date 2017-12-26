<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolasiswa extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_siswa');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/siswa/add_siswa';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Siswa  Bengkel Seni';
		$this->load->view('admin/v_home', $sisi);
	}

	public function view()
	{
		$sisi['content'] = 'admin/tam_content';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Pendaftaran';
		$this->load->view('admin/v_home', $sisi);
	}
}
