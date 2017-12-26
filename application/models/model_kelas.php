<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_kelas extends CI_model {


	public function getdata($key)
	{
		$this->db->where('kode_kelas',$key);
		$hasil = $this->db->get('kelas');
		return $hasil;
	}

	public function ambil_data()
	{
		$quey = "SELECT kelas.nama_kelas,
						siswa.nis,
						siswa.nama_siswa,
						pengajar.nama_pengajar,
						detail_kelas.kode_kelas
				FROM kelas, siswa, detail_kelas, pengajar
				WHERE kelas.kode_kelas = detail_kelas.kode_kelas AND
					  siswa.nis = detail_kelas.nis AND
					  pengajar.id_pengajar = detail_kelas.id_pengajar
				ORDER BY detail_kelas.kode_kelas ASC";
		return $this->db->query($quey);
	}

	public function get_datakey($key)
	{
		$this->db->where('kode_kelas',$key);
		$hasil = $this->db->get('kelas');
		return $hasil;
	}

	public function tampil_siswa($key)
	{
		$this->db->where('nis', $key);
		$query = $this->db->get('siswa');
		if ($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$hasil = $row->nama_siswa;
			}
		}
		else
		{
			$hasil = '';
		}
		return $hasil;
	}

	public function tampil_kelas($key)
	{
		$this->db->where('kode_kelas', $key);
		$query = $this->db->get('kelas');
		if ($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$hasil = $row->nama_kelas;
			}
		}
		else
		{
			$hasil = '';
		}
		return $hasil;
	}

	public function tampil_pengajar($key)
	{
		$this->db->where('id_pengajar', $key);
		$query = $this->db->get('pengajar');
		if ($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$hasil = $row->nama_pengajar;
			}
		}
		else
		{
			$hasil = '';
		}
		return $hasil;
	}

	public function get_update_detail($key,$data)
	{
		$this->db->where('kode_kelas', $key);
		$this->db->update('detail_kelas',$data);
	}

	public function get_insert_detail($data)
	{
		$this->db->insert('detail_kelas',$data);
	}

	public function getupdate($key,$data)
	{
		$this->db->where('kode_kelas', $key);
		$this->db->update('detail_kelas',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('kelas',$data);
	}

	public function get_post($result = array())
	{
		$total_array = count($result);
		if ($total_array != 0)
		{
			$this->db->insert_batch('detail_kelas', $result);
		}
	}

	public function getdelete($key)
	{
		$this->db->where('kode_kelas',$key);
		$this->db->delete('kelas');
	}

	public function getdelete_detail($key)
	{
		$this->db->where('nis',$key);
		$this->db->delete('detail_kelas');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(kode_kelas, 5)) AS idmax FROM kelas";
		$q = $this->db->query($sql);
		$kd = "";
		if ($q->num_rows()>0)
		{
			foreach ($q->result() as $k)
			{
				$tmp = ((int)$k->idmax)+1;
				$kd = sprintf('%05s',$tmp);
			}
		}
		else
		{
			$kd = "KL-00001";
		}
		$id = "KL-";
		return $id.$kd;
	}
}
