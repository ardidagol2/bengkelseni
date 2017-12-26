<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_kelas');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/kelas/view_kelas';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Kelas Bengkel Seni';
		$sisi['data'] = $this->db->get('kelas');
		$sisi['data1'] = $this->db->get('pengajar');
		$sisi['data2'] = $this->db->get('siswa');
		$this->load->view('admin/v_home', $sisi);
	}

	public function daftar()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_kelas');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/kelas/view_daftar';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Daftar Siswa Detail';
		$sisi['data'] = $this->model_kelas->ambil_data();
		$sisi['data1'] = $this->db->get('kelas');
		$sisi['data2'] = $this->db->get('siswa');
		$sisi['data3'] = $this->db->get('pengajar');
		$this->load->view('admin/v_home', $sisi);
	}
	
	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_kelas');
		$this->load->model('model_pengajar');

		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/kelas/add_kelas';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Kelas Bengkel Seni';
		$sisi['data'] = $this->db->get('kelas');
		$sisi['data1'] = $this->db->get('siswa');
		$sisi['data2'] = $this->db->get('pengajar');
		// $sisi['show'] = $this->model_pengajar->getdata();
		$this->load->view('admin/v_home', $sisi);
	}

	public function simpan_detail()
	{
		$this->model_squrity->getsqurity();
		$key = $this->input->post('kode_kelas');
		$data['kode_kelas'] = $this->input->post('kode_kelas');
		$data['nis'] 		= $this->input->post('nis');
		$data['id_pengajar']= $this->input->post('id_pengajar');

		$this->load->model('model_kelas');
		$query = $this->model_kelas->get_datakey($key);
		if (!$query->num_rows()>0)
		{
			$this->model_kelas->get_update_detail($key, $data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");
		}
		else
		{
			$this->model_kelas->get_insert_detail($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('admin/kelas/daftar');
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();

		$key = $this->input->post('kode_kelas');
		$data['kode_kelas']		= $this->input->post('kode_kelas');
		$data['bidang_seni']	= $this->input->post('bidang_seni');
		$data['jenis_kelas'] 	= $this->input->post('jenis_kelas');
		$data['hari_belajar']	= $this->input->post('hari_belajar');
		$data['nama_kelas']		= $this->input->post('nama_kelas');
		// $data['nis'] 			= $this->input->post('nis');
		$data['waktu'] 	= $this->input->post('waktu');

		$pos = $this->input->post();
		$result = array();
		$total_post = count($pos['nama']);

		foreach ($pos as $ke => $val) {
			$result = array(
				'nis' => $pos['nama'][$ke],
				'kode_kelas' => $pos['kode_kls'][$ke],
				'id_pengajar' => $pos['id_pengajar'][$ke]);
		}

		$this->load->model('model_kelas');
		$query =$this->model_kelas->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_kelas->getupdate($key, $data);
			$this->model_kelas->get_post($result);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");
		}
		else
		{
			$this->model_kelas->getinsert($data);
			$this->model_kelas->get_post($result);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('admin/kelas');
	}

	public function hapus_detail()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_kelas');

		$key = $this->uri->segment(4);
		$this->db->where('nis',$key);
		$query = $this->db->get('detail_kelas');
		if ($query->num_rows()>0) 
		{
			$this->model_kelas->getdelete_detail($key);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Data telah berhasil di Hapus !!</div>");
		}
		else
		{
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Gagal dalam penghapusan data !!</div>");
		}
		redirect('admin/kelas/daftar');
	}
}
