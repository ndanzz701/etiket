<?php
class DataJson extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('pelanggan');
		$this->load->model('ajaxsearch_model');
	}

	function index(){
		$data=$this->pelanggan->product_list();
		echo json_encode($data);
	}
	function bandara(){
		$data=$this->pelanggan->pswt_bdg();
		echo json_encode($data);
	}
	function Bandung()
	{
		$output = '';
		$query = '';
		$query2 = '';
		$query3 = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
			$query2 = $this->input->post('query2');
			$query3 = $this->input->post('query3');
		}
		$gambar = array(
			'garuda' => "https://static.tiket.photos/image/upload/v1534836229/string/2018/08/21/93102e79-7442-458e-a227-789bd08eddb0c4f3f430c09d1128f1f0019aaaec2679.png",
			'lion' => "https://static.tiket.photos/image/upload/v1534836616/string/2018/08/21/77df219f-f1d2-494b-a5e7-a339a30e68dd36101a6e250cd0c3b727098ef19b62c6.png",
			'wings' => "https://static.tiket.photos/image/upload/v1534836678/string/2018/08/21/2aac432c-b367-41c9-8c22-0b003aa202f2cba0bf273bc8caf2ae4d436d277c3c8b.png",
			'nam' => "https://static.tiket.photos/image/upload/v1534837148/string/2018/08/21/87050343-4e26-42fa-b0b0-0e4881c9d04074623606568037120d3137349126a7c4.png",
			);
		$data = $this->ajaxsearch_model->fetchpesawatbdg($query,$query2,$query3);
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$test='';
				if ($row->maskapai=="Garuda Indonesia"){
					$test=$gambar['garuda'];
				}else if($row->maskapai=="Lion Air"){
					$test=$gambar['lion'];
				}else if($row->maskapai=="Wings Air"){
					$test=$gambar['wings'];
				}else if($row->maskapai=="Nam Air"){
					$test=$gambar['nam'];
				}
				$jumlah=$this->input->post('jumlah');
				$harga=$row->harga;
				$hasil=$harga*$jumlah;
                $output .= '
				<div class="card">
				<div class="card-header">
					<div class="row" id="">
						<div class="col-md-2">
						<img src="'.$test.'" id="gambar">
						</div>
					
						<div class="col-md-10">
						<div class="d-flex justify-content-between"><p class="text-center font-weight-bold">'.$row->maskapai.'</p></div>
					
						  </div>
						</div>
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-between">Harga x '.$jumlah.' :<p class="m-b-15" id="harga" >'.$this->rupiah($hasil).'</p></div>
							  <div class="d-flex justify-content-between">Biaya Layanan :<p class="m-b-15 text-primary">Gratis</p></div>
								   <div class="d-flex justify-content-between">Pajak :<p class="m-b-15 text-primary">Termasuk</p></div>
						</div>

						 <div class="card-footer">
						 <div class="d-flex justify-content-between"><h4>Total :</h4><p id="hargatotal">'.$this->rupiah($hasil).'</p></div>
						</div>
							</div>
				';
			}
		}
		else
		{
			$output .= '<div class="col-lg-12"><div class="d-flex justify-content-center"><p class="text-muted m-b-15">No Data Found</p></div></div>';
		}
		
		echo $output;
		return $output;
	}
	 
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka);
	return $hasil_rupiah;
 
}

public function laporan_pdf(){

	$data = array(
		"dataku" => array(
			"nama" => "Petani Kode",
			"url" => "http://petanikode.com"
		)
	);

	$this->load->library('pdf');

	$this->pdf->setPaper('A4', 'potrait');
	$this->pdf->filename = "laporan-petanikode.pdf";
	$this->pdf->load_view('laporan_pdf', $data);


}

}