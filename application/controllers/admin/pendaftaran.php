<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pendaftaran');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/pendaftaran/form_daftar';
		$sisi['judul'] = 'Home';
		$sisi['data1'] = $this->db->get('kelas');
		$sisi['subjudul'] = 'Pendaftaran';
		$this->load->view('admin/v_home', $sisi);
	}

	public function view()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pendaftaran');
		$sisi['nama'] = $this->session->userdata('nama');
		$sisi['content'] = 'admin/pendaftaran/view_pendaftaran';
		$sisi['judul'] = 'Home';
		$sisi['subjudul'] = 'Pendaftaran';
		$sisi['data'] = $this->db->get('pendaftaran');
		$sisi['data1'] = $this->db->get('kelas');
		$this->load->view('admin/v_home', $sisi);
	}

	public function simpan()
	{
		$this->model_squrity->getsqurity();
		 $config = array(
		 	'upload_path' => 'assets/struk_bayar',
		 	'allowed_types' => 'jpg|jpeg|png|bmp',
		 	'max_size' => 0,
		 	'file_name' => url_title($this->input->post('file')),
		 	'encrypt_name' => true
		 );

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$key = $this->input->post('no');
			$data['no_daftar']	= $this->input->post('no');
			$data['nama']			= $this->input->post('nama');
			$data['no_id'] 			= $this->input->post('noid');
			$data['telp'] 			= $this->input->post('telp');
			$data['email'] 			= $this->input->post('email');
			$data['alamat'] 		= $this->input->post('alamat');
			$data['bidang_seni'] 	= $this->input->post('pilihseni');
			$data['biaya'] 			= $this->input->post('biaya');
			$data['jenis_kelas'] 	= $this->input->post('jenis_kelas');
			$data['hari_belajar'] 	= $this->input->post('hari_belajar');
			$data['waktu'] 			= $this->input->post('waktu');
			$data['cara_bayar'] 	= $this->input->post('cara_bayar');
			$data['file_transfer'] 	= $this->upload->file_name;

			$this->load->model('model_pendaftaran');
			$query =$this->model_pendaftaran->getdata($key);
			if ($query->num_rows()>0)
			{
				$this->model_pendaftaran->getupdate($key, $data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

			}
			else
			{
				$this->model_pendaftaran->getinsert($data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
			}
			redirect('admin/pendaftaran/view');
		}
		else
		{
			$key = $this->input->post('no');
			$data['no_daftar']	= $this->input->post('no');
			$data['nama']			= $this->input->post('nama');
			$data['no_id'] 			= $this->input->post('noid');
			$data['telp'] 			= $this->input->post('telp');
			$data['email'] 			= $this->input->post('email');
			$data['alamat'] 		= $this->input->post('alamat');
			$data['bidang_seni'] 	= $this->input->post('pilihseni');
			$data['biaya'] 			= $this->input->post('biaya');
			$data['jenis_kelas'] 	= $this->input->post('jenis_kelas');
			$data['hari_belajar'] 	= $this->input->post('hari_belajar');
			$data['waktu'] 			= $this->input->post('waktu');
			$data['cara_bayar'] 	= $this->input->post('cara_bayar');

			$this->load->model('model_pendaftaran');
			$query =$this->model_pendaftaran->getdata($key);
			if ($query->num_rows()>0)
			{
				$this->model_pendaftaran->getupdate($key, $data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Update !!</div>");

			}
			else
			{
				$this->model_pendaftaran->getinsert($data);
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check green\"></i> Data telah berhasil di Simpan !!</div>");
			}
			redirect('admin/pendaftaran/view');
		}
	}

	public function hapus()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pendaftaran');

		$key = $this->uri->segment(4);
		$this->db->where('no_daftar',$key);
		$query = $this->db->get('pendaftaran');
		if ($query->num_rows()>0) 
		{
			$this->model_pendaftaran->getdelete($key);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Data telah berhasil di Hapus !!</div>");
		}
		else
		{
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-block alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"ace-icon fa fa-times\"></i></button><i class=\"ace-icon fa fa-check red\"></i> Gagal dalam penghapusan data !!</div>");
		}
		redirect('admin/pendaftaran/view');
	}

    function report(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NO',1,0);
        $pdf->Cell(85,6,'NAMA SISWA',1,0);
        $pdf->Cell(27,6,'NIS',1,0);
        $pdf->Cell(25,6,'Telp',1,1);
        $pdf->Cell(25,6,'E-mail',1,1);
        $pdf->Cell(25,6,'alamat',1,1);
        $pdf->Cell(25,6,'bidang_seni',1,1);
        $pdf->SetFont('Arial','',10);
        
        $pendaftaran = $this->db->get('pendaftaran')->result();
        foreach ($pendaftaran as $row){
            $pdf->Cell(20,6,$row->no_daftar,1,0);
            $pdf->Cell(85,6,$row->nama,1,0);
            $pdf->Cell(27,6,$row->no_id,1,0);
            $pdf->Cell(25,6,$row->telp,1,1); 
        }
        $pdf->Output();
    }
}
