<?php
class Pelanggan extends CI_Model{

	function product_list(){
		$hasil=$this->db->get('data_pelanggan');
		return $hasil->result();
	}
	function pswt_bdg(){
		$hasil=$this->db->get('pswt_bdg');
		return $hasil->result();
	}
	function addcart($table_name,$id){
		$this->db->where('id',$id);
		$ambildata = $this->db->get($table_name);
		return $ambildata->row();
	}
		
}