<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("data_pelanggan");
		if($query != '')
		{
			$this->db->like('nama', $query);
			$this->db->or_like('nik', $query);
			$this->db->or_like('gender', $query);
			$this->db->or_like('no_hp', $query);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
	function fetchpesawatbdg($query,$query2,$query3,$query4)
	{
		$this->db->select("*");
		$this->db->from("pswt_bdg");
		if($query != '')
		{
			$this->db->where('tujuan',$query);
			$this->db->where('dari',$query2);
			$this->db->where('tipe',$query3);
			$this->db->where('qty >=',$query4);
		}
		$this->db->order_by('id', 'ASC');
		return $this->db->get();
	}
	function fetchbandara(){
		$hasil=$this->db->get('daftar_bandara');
		return $hasil->result();
	}
}
?>