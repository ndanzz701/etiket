<?php
Class c_transportasi extends CI_Controller{

	function __construct(){
		parent::__construct();
			$this->load->model('m_admin');
    }
    function data_transportasi(){
			$data=$this->m_admin->list_transportasi();
			echo json_encode($data);
		}
		function add_transportasi(){
			$data=$this->m_admin->tambah_transportasi();
			echo json_encode($data);
		}
		function update_transportasi(){
			$data=$this->m_admin->update_transportasi();
			echo json_encode($data);
		}
		function delete_transportasi(){
			$data=$this->m_admin->delete_transportasi();
			echo json_encode($data);
		}
}