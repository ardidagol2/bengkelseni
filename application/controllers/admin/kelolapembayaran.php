<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolapembayaran extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pembayaran');
		// $this->load->model('model_siswa');


		$sisi['nama']     = $this->session->userdata('nama');
		$sisi['content']  = 'admin/pembayaran/add_pembayaran';
		$sisi['judul']    = 'Home';
		$sisi['subjudul'] = 'Pembayaran  Bengkel Seni';
		$sisi['data']	  = $this->db->get('pembayaran'); 
		$sisi['data_join']	= $this->model_pembayaran->join_pembayaran();
		$sisi['data1']		= $this->db->get('siswa');
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
