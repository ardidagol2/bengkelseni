<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_squrity extends CI_model {

	public function getsqurity()
	{
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		if(empty($username) && empty($password))
		{
			$this->session->sess_destroy();
			redirect('admin/login','refresh');
		}
	}
}
