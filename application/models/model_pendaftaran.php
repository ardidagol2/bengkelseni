<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_pendaftaran extends CI_model {

	public function get_data(){
		$this->db->select('*');
		$this->db->where('no_daftar', '

			');
		$this->db->from('pendaftaran');
		$qwr = $this->db->get();
		return $qwr->result();
	}

	public function getdata($key)
	{
		$this->db->where('no_daftar',$key);
		$hasil = $this->db->get('pendaftaran');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('no_daftar', $key);
		$this->db->update('pendaftaran',$data);
	}

	public function getchange($key, $data)
	{
		$this->db->where('no_daftar', $key);
		$this->db->update('pendaftaran');
	}

	public function getinsert($data)
	{
		$this->db->insert('pendaftaran',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('no_daftar',$key);
		$this->db->delete('pendaftaran');
	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(no_daftar, 5)) AS idmax FROM pendaftaran";
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
			$kd = "P-00001";
		}
		$id = "P-";
		return $id.$kd;
	}
}
