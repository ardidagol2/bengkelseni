<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilihanmenari extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pilihantari');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/bengkel_tari/permin_menari';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Permintaan Menari';
		$this->load->view('admin/v_home', $sisi);
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();
		$this->model_squrity->getsqurity();
		 $config = array(
		 	'upload_path' => 'assets/bayar_tari/',
		 	'allowed_types' => 'jpg|jpeg|png|bmp',
		 	'max_size' => 0,
		 	'file_name' => url_title($this->input->post('file')),
		 	'encrypt_name' => true
		 );

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
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
			$data['file']		= $this->upload->file_name;

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
			redirect('admin/pilihanmenari');
		} else {
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
			$data['file']		= $this->upload->file_name;

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
			redirect('admin/pilihanmenari');
		}
	}

	public function hapus()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pilihantari');

		$key = $this->uri->segment(4);
		$this->db->where('no_permin',$key);
		$query = $this->db->get('pilihantari');
		if ($query->num_rows()>0) 
		{
			$this->model_pilihantari->getdelete($key);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Data telah berhasil di Hapus !!</div>");
		}
		else
		{
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Gagal dalam penghapusan data !!</div>");
		}
		redirect('admin/pilihanmenari');
	}
}
