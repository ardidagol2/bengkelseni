<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_pengajar extends CI_model {


	public function getdata($key)
	{
		$this->db->where('id_pengajar',$key);
		$hasil = $this->db->get('pengajar');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_pengajar', $key);
		$this->db->update('pengajar',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('pengajar',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id_pengajar',$key);
		$this->db->delete('pengajar');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(id_pengajar, 5)) AS idmax FROM pengajar";
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
			$kd = "ID-00001";
		}
		$id = "ID-";
		return $id.$kd;
	}
}
