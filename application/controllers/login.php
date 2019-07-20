<?php
Class login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
		$this->load->model('pelanggan');
	}

	public function index(){
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('akses')=='1'){
			redirect('admin');
		}
		else if($this->session->userdata('akses')=='3'){
			redirect('user');
			
		}else if($this->session->userdata('akses')=='2'){
			redirect('petugas');
			
		}else{
			$this->load->view('login_page');
		}
	}

}