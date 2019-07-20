<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {


	function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->ajaxsearch_model->fetch_data($query);
		$output .= '
        <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Gender</th>
                <th>Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
                $output .= '
              
                <tr>
                <td>'.$row->nama.'</td>
                <td>'.$row->nik.'</td>
                <td>'.$row->gender.'</td>
                <td>'.$row->no_hp.'</td>
                    <td> 
                    <div class="table-data-feature">
                    <form action="delete'.$row->id.'" method="post">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            </form>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="4">No Data Found</td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
    }
    

    function fetchbandara(){
        $this->load->model('ajaxsearch_model');
		$data=$this->ajaxsearch_model->fetchbandara();
		echo json_encode($data);
    }
    
    function Bandung()
	{
		
		$output = '';
		$query = '';
		$query2 = '';
		$query3 = '';
		$query4 = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
			$query2 = $this->input->post('query2');
			$query3 = $this->input->post('query3');
			$query4 = $this->input->post('jumlah');
		}
		$gambar = array(
			'garuda' => "http://localhost/ujikomtest6/assets/images/icons/garuda.png",
			'lion' => "http://localhost/ujikomtest6/assets/images/icons/lion.png",
			'wings' => "http://localhost/ujikomtest6/assets/images/icons/wingsair.png",
			'nam' => "http://localhost/ujikomtest6/assets/images/icons/nam%20air.png",
			'kereta' => "http://localhost/ujikomtest6/assets/images/icons/kereta.png",		
		);
		$data = $this->ajaxsearch_model->fetchpesawatbdg($query,$query2,$query3,$query4);
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
				}else{
					$test=$gambar['kereta'];
				}
				$jumlah=$this->input->post('jumlah');
				$dari=$this->input->post('dari');
				$tujuan=$this->input->post('tujuan');
				$tgl_pemberangkatan=$this->input->post('tgl_pemberangkatan');
				$harga=$row->harga;
				$hasil=$harga*$jumlah;
                $output .= '
				<div class="col-lg-6" id="">
					<div class="card">
					<form action="submitdata/'.$row->id.'" method="GET">
						<div class="card-header">
							<div class="row">
								<div class="col-md-2">
								<img src="'.$test.'" id="gambar">
								<input type="hidden" name="id" value="'.$row->id.'" /><input type="hidden" name="dari" value="'.$dari.'" /><input type="hidden" name="tujuan" value="'.$tujuan.'" /><input type="hidden" name="tgl_pemberangkatan" value="'.$tgl_pemberangkatan.'" /><input type="hidden" name="tipe" value="'.$row->tipe.'" />
								</div>
							
								<div class="col-md-10">
								<div class="d-flex justify-content-between"><input type="hidden" name="maskapai" value="'.$row->maskapai.'" /><p class="text-center font-weight-bold">'.$row->maskapai.'</p> <button type="submit" class="btn btn-success btn-sm">
								<i class="fas fa-shopping-cart"></i>&nbsp; Pesan Tiket</button></div>
							
     							 </div>
							</div>
						</div>
								<div class="card-body">
								<div class="d-flex justify-content-between">Dari :<p class="m-b-15">'.$dari.'</p></div>
								<div class="d-flex justify-content-between">Tujuan :<p class="m-b-15">'.$tujuan.'</p></div>
								<div class="d-flex justify-content-between">Harga x '.$jumlah.' :<input type="hidden" name="jumlah" value="'.$jumlah.'" /><p class="m-b-15" id="harga" >'.$this->rupiah($hasil).'</p></div>
									  <div class="d-flex justify-content-between">Biaya Layanan :<p class="m-b-15 text-primary">Gratis</p></div>
  										 <div class="d-flex justify-content-between">Pajak :<p class="m-b-15 text-primary">Termasuk</p></div>
								</div>

 							<div class="card-footer">
 								<div class="d-flex justify-content-between"><h4>Total :</h4><p id="hargatotal">'.$this->rupiah($hasil).'</p></div>
							</div>
					</div>
				</div>
				</form>
				';
			}
		}
		else
		{
			$output .= '<div class="col-lg-12"><div class="d-flex justify-content-center"><p class="text-muted m-b-15">Tiket Tidak Ditemukan</p></div></div>';
		}
		
		echo $output;
		return $output;
	}
	 
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka);
	return $hasil_rupiah;
 
}
function testsaja($dari,$tujuan,$tipe){

	$this->db->where('tujuan',$tujuan);
	$this->db->where('dari',$dari);
	$this->db->where('tipe',$tipe);
	$this->db->from("pswt_bdg");
	
	$this->db->order_by('id', 'ASC');
	$query = $this->db->get();
	$var = $query->result_array();
	var_dump($var);

}
}

