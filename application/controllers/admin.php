<?php
Class admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}
	public function header(){
		if($this->session->userdata('akses')=='1'){
			$this->load->view('admin/header');
		
		}
		else{
			redirect('/');
		}
	}
	public function index(){
		//load session library
		$this->load->library('session');
		$data= array(
			'jumlah_pelanggan' => $this->jumlah_pelanggan(),
			'jumlah_order' => $this->jumlah_order(),
			'jumlah_kereta' => $this->jumlah_kereta(),
			'jumlah_pesawat' => $this->jumlah_pesawat(),
			'jumlah_user'	=> $this->jumlah_user(),
			'total_pendapatan' => $this->rupiah($this->total_pendapatan()),
		);
		//restrict users to go to home if not logged in
		$this->header();
		$this->load->view('admin/index', $data);
	}
	function pelanggan(){
		$this->header();
	$this->load->view('admin/pelanggan');
	
	}
	function transportasi(){
		$this->header();
		$this->load->view('admin/transportasi');
		
	}
	function user(){
		$this->header();
		$this->load->view('admin/user');
	}
	function add_user(){
		$data=$this->m_admin->tambah_user();
		echo json_encode($data);
	}
	function data_user(){
		$data=$this->m_admin->list_user();
		echo json_encode($data);
	}
	function edit_user(){
		$data=$this->m_admin->update_user();
		echo json_encode($data);
	}
	function hapus_user(){
		$data=$this->m_admin->delete_user();
		echo json_encode($data);
	}
	function data_pelanggan(){
		$data=$this->m_admin->list_pelanggan();
		echo json_encode($data);
	}
	function add(){
		$data=$this->m_admin->tambah_pelanggan();
		echo json_encode($data);
	}
	function update(){
		$data=$this->m_admin->update_pelanggan();
		echo json_encode($data);
	}
	function delete(){
		$data=$this->m_admin->delete_pelanggan();
		echo json_encode($data);
	}
	function jumlah_pelanggan(){
		$query = $this->db->query('SELECT * FROM data_pelanggan');
		
		return $query->num_rows();
	}
	function jumlah_order(){
		$query = $this->db->query('SELECT * FROM last_order');
		
		return $query->num_rows();
	}
	function jumlah_kereta(){
		$query =	$this->db->query("SELECT * from pswt_bdg where tipe = 'Kereta'");
		return $query->num_rows();
	}
	function jumlah_pesawat(){
		$query =	$this->db->query("SELECT * from pswt_bdg where tipe = 'Pesawat'");
		return $query->num_rows();
	}
	function jumlah_user(){
		$query =	$this->db->query("SELECT * from login_user");
		return $query->num_rows();
	}
	function total_pendapatan(){
		$this->db->select_sum('total_harga');
		$this->db->where('status',1);
		$query = $this->db->get('last_order');
		$jsonencode = json_encode($query->row_array());
		$jsondedoce = json_decode($jsonencode);
		return $result_qty= $jsondedoce->total_harga;
	}
	function rupiah($angka){
	
		$hasil_rupiah = "Rp " . number_format($angka);
		return $hasil_rupiah;
	 
	}
	function test(){
		echo $this->jumlah_kereta();
	}
	function last_order(){
		$data=$this->m_admin->last_order();
		echo json_encode($data);
	}
	function last_orderunconfirm(){
		$data=$this->m_admin->last_orderunconfirm();
		echo json_encode($data);
	}
	function last_orderunconfirmpetugas(){
		$data=$this->m_admin->last_orderunconfirmpetugas();
		echo json_encode($data);
	}
	function last_orderpetugas(){
		$data=$this->m_admin->last_orderpetugas();
		echo json_encode($data);
	}
	function edit_last_order(){
		$data=$this->m_admin->update_last_order();
		echo json_encode($data);
	}

}