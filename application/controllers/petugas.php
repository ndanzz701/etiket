<?php
Class petugas extends CI_Controller{
    public function index(){
        $this->header();
        $this->load->view('petugas/index');
    }
    public function header(){
        if($this->session->userdata('akses')=='2'){
			$this->load->view('petugas/header');
		}
		else{
			redirect('/');
		}
    }
}