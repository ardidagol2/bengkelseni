<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class Model_pembayaran extends CI_model {


	public function getdata($key)
	{
		$this->db->where('no_bayar',$key);
		$hasil = $this->db->get('pembayaran');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('no_bayar', $key);
		$this->db->update('pembayaran',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('pembayaran',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('no_bayar',$key);
		$this->db->delete('pembayaran');
	}

	public function join_pembayaran(){
		$this->db->SELECT('*');
		$this->db->FROM('pembayaran');
		$this->db->join('siswa','siswa.nis = pembayaran.nis', 'LEFT');
		$this->db->order_by('no_bayar');
		return $this->db->get()->result();

	}

	public function get_kodeunik()
	{
		$sql = "SELECT MAX(RIGHT(no_bayar, 5)) AS idmax FROM pembayaran";
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
			$kd = "KB-00001";
		}
		$id = "KB-";
		return $id.$kd;
	}
}
