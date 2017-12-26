<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_dashboard extends CI_model {


	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('berita');
		return $hasil;
	}

	public function get_berita()
	{
		$sql = "SELECT max(id) as idmax FROM berita";
		$q = $this->db->query($sql);
		$kd = "";
		if ($q->num_rows()>0)
		{
			foreach ($q->result() as $k)
			{
				$tmp = ((int)$k->idmax)+1;
			}
		}
		return $tmp.$kd;
	}

	public function getupdate($key,$dat)
	{
		$this->db->where('id', $key);
		$this->db->update('berita',$dat);
	}

	public function getinsert($data)
	{
		$this->db->insert('berita',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('berita');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(id, 5)) AS idmax FROM berita";
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
			$kd = "B-00001";
		}
		$id = "B-";
		return $id.$kd;
	}
}
