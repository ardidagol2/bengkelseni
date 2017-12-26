<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_model {

	public function get_login($u,$p)
	{
		$b = 'N';
		$this->db->where('username',$u);
		$this->db->where('blokir', $b);
		$que = $this->db->get('user');

		// $que = $this->db->query("SELECT * FROM admin WHERE username = '$u' AND blokir = 'N'");
		$row = $que->row();
		if (isset($row))
		{
			$hash = $row->password;

			if (password_verify($p, $hash))
			{
				$sess = array('id_user' 	=> $row->id_user,
							  'username' 	=> $row->username,
							  'group_user' 	=> $row->user_group,
							  'nama'		=> $row->nama);
				$this->session->set_userdata($sess);
			 	redirect('admin/home');
			}
			else
			{
				$this->session->set_flashdata("info","Maaf password yang anda masukan salah..!!");
				redirect('admin/login');
			}
		}
		else
		{
			$this->session->set_flashdata("info","Maaf username dan password salah..!!");
			redirect('admin/login');
		}
	}
}
