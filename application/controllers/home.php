<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$query = "SELECT *FROM berita ORDER BY id DESC limit 1";
		$sisi['content'] = 'hal_content';
		//$sisi['judul'] = 'Home';
		//$sisi['subjudul'] = '';
		$sisi['data'] = $this->db->query($query);
		$this->load->view('hal_home', $sisi);
	}

	public function view_hasil()
	{
		$this->load->model('model_pendaftaran');
		$sisi['content'] = 'tampil_daftar';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = '';
		$sisi['data'] = $this->model_pendaftaran->get_data();
		$this->load->view('hal_home', $sisi);
	}
}