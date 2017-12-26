<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_siswa');
		$sisi['data1'] 		= $this->db->get('siswa');
		$sisi['nama'] 		= $this->session->userdata('nama');
		$sisi['content'] 	= 'admin/siswa/view_siswa';
		$sisi['judul'] 		= 'Home';
		$sisi['subjudul'] 	= 'Siswa Bengkel Seni';
		$sisi['data'] 		= $this->db->get('siswa');

		$this->load->view('admin/v_home', $sisi);
	}
	
	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_siswa');
		$sisi['nama'] 		= $this->session->userdata('nama');
		$sisi['content'] 	= 'admin/siswa/add_siswa';
		$sisi['judul'] 		= 'Home';
		$sisi['subjudul'] 	= 'Siswa Bengkel Seni';
		$sisi['data'] 		= $this->db->get('siswa');
		$this->load->view('admin/v_home', $sisi);
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();

		$key 					= $this->input->post('nis');
		$data['nis']			= $this->input->post('nis');
		$data['nama_siswa']		= $this->input->post('nama_siswa');
		$data['alamat'] 		= $this->input->post('alamat');
		$data['tempat']			= $this->input->post('tempat');
		$data['tgl_lahir']		= $this->input->post('tgl_lahir');
		$data['telp'] 			= $this->input->post('telp');
		$data['email'] 			= $this->input->post('email');
		$data['bidang_seni'] 	= $this->input->post('bidang_seni');
		$data['status_siswa'] 	= $this->input->post('status');

		$this->load->model('model_siswa');
		$query =$this->model_siswa->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_siswa->getupdate($key, $data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");
		}
		else
		{
			$this->model_siswa->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('admin/siswa');
	}


	public function edit()
	{
		$this->model_squrity->getsqurity();
		$sisi['nama']		= $this->session->userdata('nama');
		$sisi['content'] 	= 'admin/siswa/update_siswa';
		$sisi['judul']		= 'Kelola Siswa';
		$sisi['subjudul']	= 'Edit Siswa';

		$key = $this->uri->segment(4);
		$this->db->where('nis',$key);
		$query = $this->db->get('siswa');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$sisi['nis']			= $row->nis;
				$sisi['nama_siswa']		= $row->nama_siswa;
				$sisi['alamat']			= $row->alamat;
				$sisi['tgl_lahir']		= $row->tgl_lahir;
				$sisi['telp']			= $row->telp;
				$sisi['tempat']			= $row->tempat;
				$sisi['email']			= $row->email;
				$sisi['bidang_seni']	= $row->bidang_seni;
				$sisi['status_siswa']	= $row->status_siswa;
				
			}
		}
		else
		{
				$sisi['nis']			= '';
				$sisi['nama_siswa']		= '';
				$sisi['alamat']			= '';
				$sisi['tgl_lahir']		= '';
				$sisi['tempat']			= '';
				$sisi['telp']			= '';
				$sisi['email']			= '';
				$sisi['bidang_seni']	= '';
				$sisi['status_siswa']	= '';
		}

		$this->load->view('admin/v_home',$sisi);
	}


	public function delete()
	{
		
	}
}
