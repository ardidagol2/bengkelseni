<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelastari extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$query = "SELECT *FROM info_tari ORDER BY id DESC";
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/bengkel_tari/kelas_tari/b_tari';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Kelas Bengkel Tari';
		$sisi['data'] = $this->db->query($query);
		$this->load->view('admin/v_home', $sisi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_tari');

		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/bengkel_tari/kelas_tari/berita_tari';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Sekilas Info';
		$sisi['data']		= $this->db->get('info_tari');
		$this->load->view('admin/v_home', $sisi);
	}

	public function view()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_tari');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/bengkel_tari/kelas_tari/view_c_tari';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Sekilas Info';
		$sisi['data'] = $this->db->get('info_tari');
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

			$this->load->model('model_tari');
			$query =$this->model_tari->getdata($key);
			if ($query->num_rows()>0)
			{
				$this->model_tari->getupdate($key, $data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

			}
			else
			{
				$this->model_tari->getinsert($data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
			}
			redirect('admin/kelastari/view');
		}
		else
		{
			$key = $this->input->post('id');
			$data['id']	= $this->input->post('id');
			$data['judul']			= $this->input->post('judul');
			$data['isi'] 			= $this->input->post('isi');
			$data['tgl'] 			= $this->input->post('tgl');

			$this->load->model('model_tari');
			$query =$this->model_tari->getdata($key);
			if ($query->num_rows()>0)
			{
				$this->model_tari->getupdate($key, $data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

			}
			else
			{
				$this->model_tari->getinsert($data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
			}
			redirect('admin/bengkel_tari/view');
		}
	}

	public function hapus()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_tari');

		$key = $this->uri->segment(4);
		$this->db->where('id',$key);
		$query = $this->db->get('info_tari');
		if ($query->num_rows()>0) 
		{
			$this->model_tari->getdelete($key);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Data telah berhasil di Hapus !!</div>");
		}
		else
		{
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Gagal dalam penghapusan data !!</div>");
		}
		redirect('admin/bengkel_tari');
	}
}
