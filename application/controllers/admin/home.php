<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['group'] = $this->session->userdata('group_user');
		$sisi['content'] = 'admin/tam_content';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Dashboard';
		$sisi['data'] = $this->db->get('berita');
		$this->load->view('admin/v_home', $sisi);
	}
}
