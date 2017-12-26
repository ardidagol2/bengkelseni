<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_pilihantari extends CI_model {


	public function getdata($key)
	{
		$this->db->where('no_permin',$key);
		$hasil = $this->db->get('minta_menari');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('no_permin', $key);
		$this->db->update('minta_menari',$data);
	}

	public function getchange($key, $data)
	{
		$this->db->where('no_permin', $key);
		$this->db->update('minta_menari');
	}

	public function getinsert($data)
	{
		$this->db->insert('minta_menari',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('no_permin',$key);
		$this->db->delete('minta_menari');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(no_permin, 5)) AS idmax FROM minta_menari";
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
			$kd = "PM-00001";
		}
		$id = "PM-";
		return $id.$kd;
	}
}
