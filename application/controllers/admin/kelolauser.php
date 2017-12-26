<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolauser extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_user');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/user/add_user';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'User';
		$sisi['data']		= $this->db->get('user');
		$sisi['autokode']	= $this->model_user->get_kodeunik(); // memanggil fungsi kode otomatis
		$this->load->view('admin/v_home', $sisi);
	}
}
