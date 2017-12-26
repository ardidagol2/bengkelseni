<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belireparasi extends CI_Controller {

	public function index()
	{
		$this->load->model('model_reparasi');
		$sisi['content'] = 'form_belirep';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Pembelian & Reparasi';
		$sisi['data'] = $this->db->get('info_lukis');
		$this->load->view('v_home', $sisi);
	}

	public function simpan()
	{
		$key = $this->input->post('no');
		$data['no_layanan']		= $this->input->post('no');
		$data['nama']			= $this->input->post('nama');
		$data['no_id'] 			= $this->input->post('noid');
		$data['telp'] 			= $this->input->post('telp');
		$data['email'] 			= $this->input->post('email');
		$data['alamat'] 		= $this->input->post('alamat');
		$data['pelayanan'] 		= $this->input->post('pelayanan');
		$data['item']			= $this->input->post('item');
		$data['panjang_lukisan']= $this->input->post('panjang_lukisan');
		$data['estimasi'] 		= $this->input->post('estimasi');
		$data['cara_bayar'] 	= $this->input->post('cara_bayar');
		$data['file']			= $this->input->post('fupload');
		$data['total_biaya']	= $this->input->post('total_biaya');

		$this->load->model('model_reparasi');
		$query =$this->model_reparasi->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_reparasi->getupdate($key, $data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

		}
		else
		{
			$this->model_reparasi->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('pilihanmenari');
	}
}
