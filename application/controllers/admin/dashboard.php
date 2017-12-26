<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_dashboard');

		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/dashboard/add_db_1';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Sekilas Info';
		$sisi['data']		= $this->db->get('berita');
		$sisi['show'] = $this->model_dashboard->get_berita();
		$this->load->view('admin/v_home', $sisi);
	}

	public function view()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_dashboard');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/dashboard/view_dashboard';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Sekilas Info';
		$sisi['data'] = $this->db->get('berita');
		$this->load->view('admin/v_home', $sisi);
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();
		 $config = array(
		 	'upload_path' => 'assets/berita_img',
		 	'allowed_types' => 'jpg|jpeg|png|bmp',
		 	'max_size' => 0,
		 	'file_name' => url_title($this->input->post('file')),
		 	'encrypt_name' => true
		 );

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$key = $this->input->post('id');
			$data['id']		= $this->input->post('id');
			$data['judul'] 	= $this->input->post('judul');
			$data['isi'] 	= $this->input->post('isi');
			$data['tgl'] 	= $this->input->post('tgl');
			$data['image'] 	= $this->upload->file_name;

			$dat['id']		= $this->input->post('id');
			$dat['judul'] 	= $this->input->post('judul');
			$dat['isi'] 	= $this->input->post('isi');
			$dat['tgl'] 	= $this->input->post('tgl');
			$dat['image'] 	= $this->upload->file_name;

			$this->load->model('model_dashboard');
			$query =$this->model_dashboard->getdata($key);
			if ($query->num_rows()>0)
			{
				$this->model_dashboard->getupdate($key, $dat);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

			}
			else
			{
				$this->model_dashboard->getinsert($data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
			}
			redirect('admin/dashboard/view');
		}
		else
		{
			$key = $this->input->post('id');
			$data['id']	= $this->input->post('id');
			$data['judul']			= $this->input->post('judul');
			$data['isi'] 			= $this->input->post('isi');
			$data['tgl'] 			= $this->input->post('tgl');
			// $data['image'] 			= $this->input->post('image');

			$this->load->model('model_dashboard');
			$query =$this->model_dashboard->getdata($key);
			if ($query->num_rows()>0)
			{
				$this->model_dashboard->getupdate($key, $data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

			}
			else
			{
				$this->model_dashboard->getinsert($data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
			}
			redirect('admin/dashboard/view');
		}
	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_dashboard');
		$sisi['nama']		= $this->session->userdata('nama');
		$sisi['content'] 	= 'admin/dashboard/update_berita';
		$sisi['judul']		= 'Kelola Berita';
		$sisi['subjudul']	= 'Edit Berita';

		$key = $this->uri->segment(4);
		$this->db->where('id',$key);
		$query = $this->db->get('berita');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$sisi['id']			= $row->id;
				$sisi['judul']		= $row->judul;
				$sisi['isi']		= $row->isi;
				$sisi['tgl']		= $row->tgl;
				$sisi['image']			= $row->image;				
			}
		}
		else
		{
				$sisi['id']			= '';
				$sisi['judul']		= '';
				$sisi['isi']		= '';
				$sisi['tgl']		= '';
				$sisi['image']		= '';
		}

		$this->load->view('admin/v_home',$sisi);
	}


	public function hapus()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_dashboard');

		$key = $this->uri->segment(4);
		$this->db->where('id',$key);
		$query = $this->db->get('berita');
		if ($query->num_rows()>0) 
		{
			$this->model_dashboard->getdelete($key);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Data telah berhasil di Hapus !!</div>");
		}
		else
		{
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Gagal dalam penghapusan data !!</div>");
		}
		redirect('admin/dashboard/view');
	}
}