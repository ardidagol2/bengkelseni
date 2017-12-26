<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bengkellukis extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/bengkel_lukis/kelas_lukis/view_c_lukis';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Bengkel Lukis';
		$sisi['data']		= $this->db->get('bengkel_lukis');
		$this->load->view('admin/v_home', $sisi);
	}

}
