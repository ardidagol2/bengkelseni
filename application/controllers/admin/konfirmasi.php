<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/konfirmasi/konfirmasi_pendaftaran';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Konfirmasi';
		$sisi['data']		= $this->db->get('pendaftaran');
		$this->load->view('admin/v_home', $sisi);
	}

	public function konfirmasi_menari()
	{
		$this->model_squrity->getsqurity();
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/konfirmasi/konfirmasi_menari';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Konfirmasi';
		$sisi['data']		= $this->db->get('minta_menari');
		$this->load->view('admin/v_home', $sisi);
	}

	public function konfirmasi_reparasi()
	{
		$this->model_squrity->getsqurity();
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/konfirmasi/konfirmasi_reparasi';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Konfirmasi';
		$sisi['data']		= $this->db->get('reparasi');
		$this->load->view('admin/v_home', $sisi);
	}

	public function kirimmenari()
	{
		$htmlContent = '<h1>Mengirim email HTML dengan Codeigniter</h1>';
		$htmlContent .= '<div>Contoh pengiriman email yang memiliki tag HTML dengan menggunakan Codeigniter</div>';
		    
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to('senibengkel2007@gmail.com');
		$this->email->from('cekbengkelseni@gmail.com','JurnalWeb');
		$this->email->subject('Test Email (HTML)');
		$this->email->message($htmlContent);
		$this->email->send();

		redirect('admin/konfirmasi/konfirmasi_menari');
	}

	public function email(){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 25,
			'smtp_user' => 'senibengkel2007@gmail.com',
			'smtp_pass' => 'yangmana',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
		);

		// ini_set("SMTP", "smtp.gmail.com");
		// ini_set("SMTP", "ssl://smtp.gmail.com");

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('senibengkel2007@gmail.com', 'Ardianto Aja');
		$this->email->to('cekbengkelseni@gmail.com');
		$this->email->subject('Verification');
		$this->email->message('Verification');

		$path = $this->config->item('server_root');
		// $file = $path . 'bengkelseni/attachment/info.txt';

		// $this->email->attach($file);

		if ($this->email->send()) {
			echo "success";
		} else {
			show_error($this->email->print_debugger());
		}
	}

	public function email1(){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'senibengkel2007@gmail.com',
			'smtp_pass' => 'yangmana'
		);

		ini_set("SMTP", "smtp.gmail.com");
		ini_set("SMTP", "ssl://smtp.gmail.com");

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('senibengkel2007@gmail.com', 'Ardianto Aja');
		$this->email->to('cekbengkelseni@gmail.com');
		$this->email->subject('Verification');
		$this->email->message('Verification');

		$path = $this->config->item('server_root');
		// $file = $path . 'bengkelseni/attachment/info.txt';

		$this->email->attach($file);

		if ($this->email->send()) {
			echo "success";
		} else {
			show_error($this->email->print_debugger());
		}
	}

	public function email2(){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'senibengkel2007@gmail.com',
			'smtp_pass' => 'yangmana'
		);

		ini_set("SMTP", "smtp.gmail.com");
		ini_set("SMTP", "ssl://smtp.gmail.com");

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('senibengkel2007@gmail.com', 'Ardianto Aja');
		$this->email->to('cekbengkelseni@gmail.com');
		$this->email->subject('Verification');
		$this->email->message('Verification');

		$path = $this->config->item('server_root');
		// $file = $path . 'bengkelseni/attachment/info.txt';

		$this->email->attach($file);

		if ($this->email->send()) {
			echo "success";
		} else {
			show_error($this->email->print_debugger());
		}
	}

}
