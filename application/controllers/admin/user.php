<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/user/view_user';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'User';
		$sisi['data']		= $this->db->get('user');
		$this->load->view('admin/v_home', $sisi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$sisi['content'] 	= 'admin/user/add_user';
		$sisi['judul'] 		= 'Kelola User';
		$sisi['subjudul']	= 'Tambah User';
		$sisi['id'] 		= '';
		$sisi['nama']		= '';
		$sisi['alamat'] 	= '';
		$sisi['telp'] 		= '';
		$sisi['email'] 		= '';
		$sisi['username'] 	= '';
		$sisi['password'] 	= '';
		$sisi['user_group'] = '';

	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$sisi['content']  = 'admin/user/update_user';
		$sisi['judul']    = 'Kelola User';
		$sisi['subjudul'] = 'Update User';

		$key = $this->uri->segment(4);
		$this->db->where('id_user',$key);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sisi['id'] 		= $row->id_user;
				$sisi['nama']		= $row->nama;
				$sisi['alamat'] 	= $row->alamat;
				$sisi['telp'] 		= $row->telp;
				$sisi['email'] 		= $row->email;
				$sisi['username'] 	= $row->username;
				$sisi['password'] 	= $row->password;
				$sisi['user_group'] = $row->user_group;
			}
		}
		else
		{
			$sisi['id'] 		= '';
			$sisi['nama']		= '';
			$sisi['alamat'] 	= '';
			$sisi['telp'] 		= '';
			$sisi['email'] 		= '';
			$sisi['username'] 	= '';
			$sisi['password'] 	= '';
			$sisi['user_group'] = '';
		    }

	    $this->load->view('admin/v_home',$sisi);
	}

	public function gantipass()
	{
		$this->model_squrity->getsqurity();
		$pass	= $this->input->post('password');
		$password = password_hash($password, PASSWORD_DEFAULT);
		$data['password'] = $password;
		$this->load->model('model_user');
		$query = $this->model_user->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_user->getchange($key, $data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");
		}
		redirect('admin/user');
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();
		$pass	= $this->input->post('password');
		$password = password_hash($pass, PASSWORD_DEFAULT);

		$key = $this->input->post('id');
		$data['id_user']	= $this->input->post('id');
		$data['nama']		= $this->input->post('nama');
		$data['alamat'] 	= $this->input->post('alamat');
		$data['telp'] 		= $this->input->post('telp');
		$data['email'] 		= $this->input->post('email');
		$data['username'] 	= $this->input->post('username');
		$data['password'] 	= $password;
		$data['user_group'] = $this->input->post('user_group');
		$data['blokir'] 	= $this->input->post('blokir');

		$data1['id_user']	= $this->input->post('id');
		$data1['nama']		= $this->input->post('nama');
		$data1['alamat'] 	= $this->input->post('alamat');
		$data1['telp'] 		= $this->input->post('telp');
		$data1['email'] 	= $this->input->post('email');
		$data1['username'] 	= $this->input->post('username');
		$data1['user_group']= $this->input->post('user_group');


		$this->load->model('model_user');
		$query =$this->model_user->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_user->getupdate($key, $data1);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

		}
		else
		{
			$this->model_user->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('admin/user');
	}

	public function hapus()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_user');

		$key = $this->uri->segment(4);
		$this->db->where('id_user',$key);
		$query = $this->db->get('user');
		if ($query->num_rows()>0) 
		{
			$this->model_user->getdelete($key);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Data telah berhasil di Hapus !!</div>");
		}
		else
		{
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Gagal dalam penghapusan data !!</div>");
		}
		redirect('admin/user');
	}

}
