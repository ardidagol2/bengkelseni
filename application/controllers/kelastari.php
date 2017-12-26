<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelastari extends CI_Controller {

	public function index()
	{
		$sisi['content'] = 'hal_kelas_btari';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Kelas Bengkel Tari';
		$sisi['data'] = $this->db->get('info_tari');
		$this->load->view('hal_home', $sisi);
	}
}
