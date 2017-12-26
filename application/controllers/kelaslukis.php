<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelaslukis extends CI_Controller {

	public function index()
	{
		$this->load->model('model_lukis');
		$sisi['content'] = 'hal_kelas_blukis';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Kelas Bengkel Lukis';
		$sisi['data'] = $this->model_lukis->ambil_data();
		$this->load->view('hal_home', $sisi);
	}
}
