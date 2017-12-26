<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_user extends CI_model {


	public function getdata($key)
	{
		$this->db->where('id_user',$key);
		$hasil = $this->db->get('user');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_user', $key);
		$this->db->update('user',$data);
	}

	public function getchange($key, $data)
	{
		$this->db->where('username', $key);
		$this->db->update('user');
	}

	public function getinsert($data)
	{
		$this->db->insert('user',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id_user',$key);
		$this->db->delete('user');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(id_user, 5)) AS idmax FROM user";
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
			$kd = "US-00001";
		}
		$id = "US-";
		return $id.$kd;
	}
}
