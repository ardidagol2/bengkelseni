<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_siswa extends CI_model {

	public function get_data(){
		$this->db->select('*');
		$this->db->from('siswa');
		$qwr = $this->db->get();
		return $qwr->result();
	}

	public function getdata($key)
	{
		$this->db->where('nis',$key);
		$hasil = $this->db->get('siswa');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('nis', $key);
		$this->db->update('siswa',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('siswa',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('nis',$key);
		$this->db->delete('siswa');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(nis, 5)) AS idmax FROM siswa";
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
			$kd = "NIS-00001";
		}
		$id = "NIS-";
		return $id.$kd;
	}
}
