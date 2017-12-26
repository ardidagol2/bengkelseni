<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_log');
	}

	public function getlogin()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$this->load->model('model_login');
		$this->model_login->get_login($u,$p);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}