<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BengkelTari extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/bengkel_tari/kelas_tari/view_c_tari';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Bengkel Tari';
		$sisi['data']		= $this->db->get('bengkel_tari');
		$this->load->view('admin/v_home', $sisi);
	}

}
