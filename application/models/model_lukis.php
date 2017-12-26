<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_lukis extends CI_model {


	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('info_lukis');
		return $hasil;
	}

	public function ambil_data()
	{
		$data = "SELECT * FROM info_lukis ORDER BY id DESC LIMIT 2";
		return $this->db->query($data);
	}

	public function get_info_lukis()
	{
		$sql = "SELECT max(id) as maxkod FROM info_lukis";
		$q = $this->db->query($sql);
		$kd = "";
		if ($q->num_rows()>0)
		{
			foreach ($q->result() as $k)
			{
				$tmp = ((int)$k->idmax)+1;
			}
		}
		return $id.$kd;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id', $key);
		$this->db->update('info_lukis',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('info_lukis',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('info_lukis');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(id, 5)) AS idmax FROM info_lukis";
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
			$kd = "BL-00001";
		}
		$id = "BL-";
		return $id.$kd;
	}
}
