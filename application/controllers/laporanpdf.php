<?php
Class laporanpdf extends CI_Controller{

	
	function laporanpdf1($id){
		$this->load->library('pdf');
		$this->db->where('id',$id);
		$data['content'] = $this->db->get('last_order');
	    $html = $this->load->view('laporan', $data, true);
	    
	    $this->pdf->generate($html,'contoh1');
	}


}