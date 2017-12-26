<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_reparasi extends CI_model {


	public function getdata($key)
	{
		$this->db->where('no_layanan',$key);
		$hasil = $this->db->get('reparasi');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('no_layanan', $key);
		$this->db->update('reparasi',$data);
	}

	public function getchange($key, $data)
	{
		$this->db->where('no_layanan', $key);
		$this->db->update('reparasi');
	}

	public function getinsert($data)
	{
		$this->db->insert('reparasi',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('no_layanan',$key);
		$this->db->delete('reparasi');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(no_layanan, 5)) AS idmax FROM reparasi";
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
			$kd = "PL-00001";
		}
		$id = "PL-";
		return $id.$kd;
	}
}
