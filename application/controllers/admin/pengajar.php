<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pengajar');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/pengajar/view_pengajar';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Pengajar Bengkel Seni';
		$sisi['data'] = $this->db->get('pengajar');
		$this->load->view('admin/v_home', $sisi);
	}
	
	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pengajar');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/pengajar/add_pengajar';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Pengajar Bengkel Seni';
		$sisi['data'] = $this->db->get('pengajar');
		$sisi['data1'] = $this->db->get('pengajar');
		$this->load->view('admin/v_home', $sisi);
	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$sisi['content']  = 'admin/pengajar/update_pengajar';
		$sisi['judul']    = 'Kelola pengajar';
		$sisi['subjudul'] = 'Update pengajar';

		$key = $this->uri->segment(4);
		$this->db->where('id_pengajar',$key);
		$query = $this->db->get('pengajar');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$sisi['id_pengajar'] 	= $row->id_pengajar;
				$sisi['nama_pengajar']	= $row->nama_pengajar;
				$sisi['tempat'] 		= $row->tempat;
				$sisi['tanggal'] 		= $row->tgl_lahir;
				$sisi['alamat'] 		= $row->alamat;
				$sisi['telp'] 			= $row->telp;
				$sisi['email'] 			= $row->email;
				$sisi['bidang_seni'] 	= $row->bidang_seni;
			}
		}
		else
		{
			$sisi['id_pengajar'] 	= '';
			$sisi['nama']			= '';
			$sisi['tempat'] 		= '';
			$sisi['tanggal'] 		= '';
			$sisi['alamat']			= '';
			$sisi['telp']		 	= '';
			$sisi['email'] 			= '';
			$sisi['bidang_seni'] 	= '';
		    }

	    $this->load->view('admin/v_home',$sisi);
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();

		$key = $this->input->post('id_pengajar');
		$data['id_pengajar']		= $this->input->post('id_pengajar');
		$data['nama_pengajar']	= $this->input->post('nama');
		$data['tempat'] 	= $this->input->post('tempat');
		$data['tgl_lahir']	= $this->input->post('tanggal_lahir');
		$data['alamat']		= $this->input->post('alamat');
		$data['telp'] 			= $this->input->post('telp');
		$data['email'] 	= $this->input->post('email');
		$data['bidang_seni'] 	= $this->input->post('bidang_seni');

		$this->load->model('model_pengajar');
		$query =$this->model_pengajar->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_pengajar->getupdate($key, $data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

		}
		else
		{
			$this->model_pengajar->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('admin/pengajar');
	}

	/*public function hapus()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pengajar');

		$key = $this->uri->segment(4);
		$this->db->where('id_pengajar',$key);
		$query = $this->db->get('pengajar');
		if ($query->num_rows()>0) 
		{
			$this->model_pengajar->getdelete($key);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Data telah berhasil di Hapus !!</div>");
		}
		else
		{
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Gagal dalam penghapusan data !!</div>");
		}
		redirect('admin/pengajar');
	}*/
}
