<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function login($username, $password){
			$query=$this->db->query("SELECT * FROM login WHERE username='$username' AND password=MD5('$password') LIMIT 1");
			return $query;
		}	
		public function login_users($username, $password){
			$query=$this->db->query("SELECT * FROM login_user WHERE username='$username' AND password='$password'");
			return $query;
		}
		function search_blog($title){
			$this->db->like('tujuan', $title , 'both');
			$this->db->order_by('harga', 'DESC');
			$this->db->limit(10);
			return $this->db->get('pswt_bdg')->result();
		}
		function qty($id){
			$this->db->select('qty');
			$this->db->from('pswt_bdg'); 
			$this->db->where('id',$id);
			$query = $this->db->get();
			$row = $query->row();
			return $row;
		}
		function pswt($id){
			$this->db->where('id', $id);
			$hasil=$this->db->get('pswt_bdg');
			return $hasil->result();
		}

	}
?>