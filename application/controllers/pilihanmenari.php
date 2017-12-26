<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilihanmenari extends CI_Controller {

	public function index()
	{
		$this->load->model('model_pilihantari');
		$sisi['content'] = 'permin_menari';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Permintaan Menari';
		$this->load->view('v_home', $sisi);
	}

	public function simpan()
	{
		$key = $this->input->post('no');
		$data['no_permin']	= $this->input->post('no');
		$data['nama']		= $this->input->post('nama');
		$data['no_id'] 		= $this->input->post('noid');
		$data['telp'] 		= $this->input->post('telp');
		$data['email'] 		= $this->input->post('email');
		$data['alamat'] 	= $this->input->post('alamat');
		$data['tgl_tari'] 	= $this->input->post('tanggal');
		$data['jenis_tari'] = $this->input->post('jenis_tari');
		$data['lama_tari'] 	= $this->input->post('lama_tari');
		$data['estimasi'] 	= $this->input->post('estimasi');
		$data['cara_bayar'] = $this->input->post('cara_bayar');
		$data['file']		= $this->input->post('fupload');

		$this->load->model('model_pilihantari');
		$query =$this->model_pilihantari->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_pilihantari->getupdate($key, $data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

		}
		else
		{
			$this->model_pilihantari->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('pilihanmenari');
	}
}
