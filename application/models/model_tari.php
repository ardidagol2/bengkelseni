<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_tari extends CI_model {


	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('info_tari');
		return $hasil;
	}

	public function get_info_tari()
	{
		$sql = "SELECT max(id) as maxkod FROM info_tari";
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
		$this->db->update('info_tari',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('info_tari',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('info_tari');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(id, 5)) AS idmax FROM info_tari";
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
