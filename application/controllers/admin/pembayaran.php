<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pembayaran');
		$sisi['nama']     = $this->session->userdata('nama');
		$sisi['content']  = 'admin/pembayaran/view_pembayaran';
		$sisi['judul']    = 'Home';
		$sisi['subjudul'] = 'Pembayaran Bengkel Seni';
		$sisi['data']     = $this->db->get('pembayaran');
		$this->load->view('admin/v_home', $sisi);
	}
	
	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pembayaran');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/pembayaran/add_pembayaran';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Pembayaran Bengkel Seni';
		$sisi['data'] = $this->db->get('pembayaran');
		$sisi['data1'] = $this->db->get('pembayaran');
		$this->load->view('admin/v_home', $sisi);
	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$sisi['content']  = 'admin/pembayaran/update_bayar';
		$sisi['judul']    = 'Kelola Pembayaran';
		$sisi['subjudul'] = 'Update Pembayaran';

		$key = $this->uri->segment(4);
		$this->db->where('no_bayar',$key);
		$query = $this->db->get('pembayaran');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sisi['no']= $row->no_bayar;
				$sisi['nama']	= $row->nama_bayar;
				$sisi['nis'] 	= $row->nis;
				$sisi['tgl'] 	= $row->tgl;
				$sisi['status'] = $row->status_bayar;
				$sisi['jenis'] 	= $row->jenis;
				$sisi['jumlah'] = $row->jumlah;
				$sisi['total'] = $row->total;
				$sisi['sisa'] 	= $row->sisa;
			}
		}
		else
		{
			$sisi['no_bayar'] 	= '';
			$sisi['nama']	= '';
			$sisi['alamat'] = '';
			$sisi['tgl'] 	= '';
			$sisi['status'] = '';
			$sisi['jenis'] 	= '';
			$sisi['jumlah'] = '';
			$sisi['total'] = '';
			$sisi['sisa'] 	= '';
		    }

	    $this->load->view('admin/v_home',$sisi);
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();

		$key = $this->input->post('no_bayar');
		$data['no_bayar']		= $this->input->post('no_bayar');
		$data['tgl']	= $this->input->post('tgl');
		$data['nis'] 	= $this->input->post('nis');
		$data['nama_bayar']	= $this->input->post('nama');
		$data['status_bayar']		= $this->input->post('status');
		$data['jenis'] 			= $this->input->post('jenis');
		$data['jumlah'] 	= $this->input->post('jumlah');
		$data['total'] 	= $this->input->post('total');
		$data['sisa'] 	= $this->input->post('sisa');

		$this->load->model('model_pembayaran');
		$query =$this->model_pembayaran->getdata($key);
		if ($query->num_rows()>0)
		{
			$this->model_pembayaran->getupdate($key, $data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

		}
		else
		{
			$this->model_pembayaran->getinsert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
		}
		redirect('admin/pembayaran');
	}

	public function delete()
	{
		
	}
}
