<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function index()
	{
		
		$this->load->model('model_pendaftaran');
		$sisi['content'] = 'hal_daftar';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Pendaftaran';
		$this->load->view('hal_home', $sisi);
	}

	public function simpan()
	{
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']	= "./assets/bayar_daftar/";
		$config['allowed_types']= "gif|jpg|png|jpeg|bmp";
		$config['max_size']		= "4500";
		$config['max_width']	= "5024";
		$config['max_height']	= "3000";
		$config['file_name']	= $nmfile;

		// $this->upload->initialize($config);
		$this->load->library('upload', $config);

		// if ($_FILES['fupload']['name'])
		// {
			if ($this->upload->do_upload('fupload'))
			{
				$gbr = $this->upload->data();

				$key = $this->input->post('no');
				$data['no_daftar']	= $this->input->post('no');
				$data['nama']			= $this->input->post('nama');
				$data['no_id'] 			= $this->input->post('noid');
				$data['telp'] 			= $this->input->post('telp');
				$data['email'] 			= $this->input->post('email');
				$data['alamat'] 		= $this->input->post('alamat');
				$data['bidang_seni'] 	= $this->input->post('pilihseni');
				$data['biaya'] 			= $this->input->post('biaya');
				$data['jenis_kelas'] 	= $this->input->post('jenis_kelas');
				$data['hari_belajar'] 	= $this->input->post('hari_belajar');
				$data['waktu'] 			= $this->input->post('waktu');
				$data['cara_bayar'] 	= $this->input->post('cara_bayar');
				$data['file_transfer'] 	= $gbr['file_name'];

				// $data['no_bayar']		= $this->input->post('no');
				// $data['tgl']			= $this->input->post('tgl');
				// $data['nis'] 			= $this->input->post('no_id');
				// $data['nama_bayar'] 	= $this->input->post('nama_bayar');
				// $data['status_bayar'] 	= $this->input->post('status_bayar');
				// $data['jenis_bayar'] 	= $this->input->post('bidang_seni');
				// $data['jenis'] 			= $this->input->post('jenis_kelas');
				// $data['jumlah'] 		= $this->input->post('jumlah');
				// $data['total'] 			= $this->input->post('total');
				// $data['sisa'] 			= $this->input->post('sisa');


				$this->load->model('model_pendaftaran');
				$query =$this->model_pendaftaran->getdata($key);
				if ($query->num_rows()>0)
				{
					$this->model_pendaftaran->getupdate($key, $data);
					$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

				}
				else
				{
					$this->model_pendaftaran->getinsert($data);
					$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
				}
				redirect('home');
			}
		// }
	}
	
	/*public function simpan1()
	{
		$key = $this->input->post('no');
		$data['no_daftar']	= $this->input->post('no');
		$data['nama']			= $this->input->post('nama');
		$data['no_id'] 			= $this->input->post('noid');
		$data['telp'] 			= $this->input->post('telp');
		$data['email'] 			= $this->input->post('email');
		$data['alamat'] 		= $this->input->post('alamat');
		$data['bidang_seni'] 	= $this->input->post('pilihseni');
		$data['biaya'] 			= $this->input->post('biaya');
		$data['jenis_kelas'] 	= $this->input->post('jenis_kelas');
		$data['hari_belajar'] 	= $this->input->post('hari_belajar');
		$data['waktu'] 			= $this->input->post('waktu');
		$data['cara_bayar'] 	= $this->input->post('cara_bayar');
		$data['file_transfer'] 	= $this->input->post('fupload');

		$this->load->model('model_pendaftaran');
		$query =$this->model_pendaftaran->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_pendaftaran->getupdate($key, $data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

		}
		else
		{
			$this->model_pendaftaran->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('home/view_hasil');
	}*/

}
