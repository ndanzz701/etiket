<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
		$this->load->model('pelanggan');
	}

	public function index(){
		//load session library
		$this->load->library('session');
		if($this->session->userdata('akses')=='3'){
			redirect('user/caripesawat');
		}
		else{
			redirect('login');
		}
		//restrict users to go back to login if session has been set
	
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$output = array('error' => false);

		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = $this->users_model->login($username, $password);

		if($data->num_rows() > 0){ //jika login admin
			$data1=$data->row_array();
	$this->session->set_userdata('masuk',TRUE);
if($data1['level']=='1'){ //Akses admin
		$this->session->set_userdata('akses','1');
		$this->session->set_userdata('username',$data1['username']);
		$this->session->set_userdata('email',$data1['email']);
		$output['message'] = 'Logging in. Please wait...';
}else{ //akses admin
		$this->session->set_userdata('akses','2');
		$this->session->set_userdata('username',$data1['username']);
		$this->session->set_userdata('email',$data1['email']);
		$output['message'] = 'Logging in. Please wait...';
}
}else{ //jika login sebagai user
		$cek_user=$this->users_model->login_users($username,$password);
		if($cek_user->num_rows() > 0){
				$data=$cek_user->row_array();
				$this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata('akses','3');
				$this->session->set_userdata('username',$data['username']);
				$this->session->set_userdata('nama',$data['nama']);
				$this->session->set_userdata('nik',$data['nik']);
				$this->session->set_userdata('gender',$data['gender']);
				$this->session->set_userdata('nohp',$data['nohp']);
				$this->session->set_userdata('idpelanggan',$data['id']);
				$output['message'] = 'Logging in. Please wait...';
		}else{  // jika username dan password tidak ditemukan atau salah
			$output['error'] = true;
			$output['message'] = 'Login Invalid. User not found';
		}
}
		
		echo json_encode($output); 
	}

	public function kereta(){
	//load session library
	$this->load->library('session');

	//restrict users to go to home if not logged in

		$this->load->view('kereta');
	

	}
	public function pesawat(){
		$this->header();
		$this->load->view('pesawat');
			//load session library
	$this->load->library('session');

	//restrict users to go to home if not logged in
	

	}

	public function caripesawat(){
		$this->header();
		$this->cart->destroy();
		$this->load->view('caripesawat');
			//load session library
	$this->load->library('session');

	//restrict users to go to home if not logged in


	}

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect('/');
	}
	public function submitdata($id){
		$this->header();
		$this->cart->destroy();
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
if (!$this->input->get()){
	redirect('/');
}else{
	$id = $this->input->get('id');
		$result_array = $this->users_model->pswt($id);
		foreach ($result_array as $key) {
		$data = array(
			'id' => $this->input->get('id'),
			'maskapai' => $key->maskapai,
			'jumlah' => $this->input->get('jumlah'),
			'dari' => $key->dari,
			'tujuan' => $key->tujuan,
			'tgl_pemberangkatan' => $this->input->get('tgl_pemberangkatan'),
			'tipe' => $key->tipe,
		);
		
		$ambildata=$this->pelanggan->addcart('pswt_bdg',$id);
		$cart = array(
		'id'      => $ambildata->id,
		'idpelanggan' => $this->session->userdata('idpelanggan'),
        'qty'     => $data['jumlah'],
        'price'   => $ambildata->harga,
        'name'    => $data['dari'].' Menuju '.$data['tujuan'],
        'tanggal' => $data['tgl_pemberangkatan'],
        'dari'	  => $data['dari'],
        'tujuan'  => $data['tujuan'],
        'tipe'	  => $data['tipe'],
        'maskapai'=> $data['maskapai']
		);
			$this->cart->insert($cart);
			$gambar = array(
				'garuda' => "http://localhost/ujikomtest6/assets/images/icons/garuda.png",
				'lion' => "http://localhost/ujikomtest6/assets/images/icons/lion.png",
				'wings' => "http://localhost/ujikomtest6/assets/images/icons/wingsair.png",
				'nam' => "http://localhost/ujikomtest6/assets/images/icons/nam%20air.png",
				'kereta' => "http://localhost/ujikomtest6/assets/images/icons/kereta.png",	
			);
			foreach ($this->cart->contents() as $item)
			{
				$test='';
				if ($item['maskapai']=="Garuda Indonesia"){
					$test=$gambar['garuda'];
				}else if($item['maskapai']=="Lion Air"){
					$test=$gambar['lion'];
				}else if($item['maskapai']=="Wings Air"){
					$test=$gambar['wings'];
				}else if($item['maskapai']=="Nam Air"){
					$test=$gambar['nam'];
				}else{
					$test=$gambar['kereta'];
				}
				$data2['content'] = array(
					'nama'		=> 		$item['name'],
					'harga'		=> 		$item['price'],
					'jumlah'	=> 		$item['qty'],
					'dari'		=> 		$item['dari'],
					'tujuan'	=> 		$item['tujuan'],
					'tipe'		=> 		$item['tipe'],
					'maskapai'	=> 		$item['maskapai'],
					'tanggal'	=> 		$item['tanggal'],
					'total'		=> 		$item['subtotal'],
					'gambar'	=> 		$test,
				);
			}
			$data3['datapelanggan'] = array(
				'namapelanggan' => $this->session->userdata('nama'),
				'nik' => $this->session->userdata('nik'),
				'gender' => $this->session->userdata('gender'),
				'nohp' => $this->session->userdata('nohp'),
			);
			$new_array = array_merge($data,$data2,$data3);
			$this->load->view("checkout_pswt", $new_array);
		}
	}
	}

	function get_autocomplete(){
	
        if (isset($_GET['term'])) {
            $result = $this->users_model->search_blog($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
			$arr_result[] = array(
				'label' => $row->tujuan,
				'description' => $row->harga,
			);
                echo json_encode($arr_result);
            }
        }
	}
	public function showcart(){
		$cart = $this->cart->contents();
		echo '<pre>';
		print_r($cart);
	}
	public function header(){
		$this->load->view("header");
	//load session library
	$this->load->library('session');

	//restrict users to go to home if not logged in

		
		
		if($this->session->userdata('akses')=='3'){
			
		}
		else{
			redirect('/');
		}
	}
	
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
                    <form action="update/'.$row->id.'" method="post">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
							</form>
							<form action="delete/'.$row->id.'" method="post">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
							</button>
							</form>
                        </div>
                    </td>
                </tr>
            
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5"><div class="d-flex justify-content-center">No Data Found</div></td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
	}
	public function add(){
		//load session library
	$this->load->library('session');

	//restrict users to go to home if not logged in

	
		
		if($this->session->userdata('user')=='1'){
			
		}
		else{
			redirect('/');
		}
		$this->header();
		$this->load->view('add');
	}
	public function actionadd(){
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'no_hp' => $this->input->post('no_hp'),
		);
		$this->db->insert('data_pelanggan',$data);
		redirect('/','refresh');
	}
	public function delete($id = null){
	$this->db->where('id',$id);
	$this->db->delete('data_pelanggan');
	redirect('/','refresh');
	}
	public function update($id = null){
		//load session library
	$this->load->library('session');

	//restrict users to go to home if not logged in

	
		
		if($this->session->userdata('user')=='1'){
			
		}
		else{
			redirect('/');
		}
		$this->header();
		$this->db->where('id',$id);
		$data['content'] = $this->db->get('data_pelanggan');
		$this->load->view('update',$data);
	}
	public function actionupdate($id = ''){
		$data = array(
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'no_hp' => $this->input->post('no_hp'),
		);
		$this->db->where('id',$id);
		$this->db->update('data_pelanggan',$data);
		redirect('/','refresh');
	}
	public function testqty(){
		
		
	}
	public function checkout(){
		$this->header();
		$this->load->helper('date');
		date_default_timezone_set('Asia/Jakarta');
		$datetime = new DateTime();
		foreach ($this->cart->contents() as $item) {

			$data = array(
				'idpelanggan' => $this->session->userdata('idpelanggan'),
				'nama' => $this->session->userdata('nama'),
				'nik' => $this->session->userdata('nik'),
				'gender' => $this->session->userdata('gender'),
				'no_hp' => $this->session->userdata('nohp'),
				'jumlah_penumpang' => $item['qty'],
				'tanggal_pemberangkatan' => $item['tanggal'],
				'dari' => $item['dari'],
				'tujuan' => $item['tujuan'],
				'jenis_tiket' => $item['tipe'],
				'maskapai' => $item['maskapai'],
				'total_harga' => $item['subtotal'],
				'tanggal' => $datetime->format('Y-m-d H:i:s'),
			);
			$id = $item['id'];
			$quantiti= $item['qty'];
			$result_qty_array = $this->users_model->qty($id);
			$jsonencode = json_encode($result_qty_array);
			$jsondedoce = json_decode($jsonencode);
			$result_qty= $jsondedoce->qty;
			$result= $result_qty - $quantiti;
			$this->db->set('qty', $result);
			$this->db->where('id', $id);
			$this->db->update('pswt_bdg');


			$this->db->insert('last_order',$data);
			$invoice = $this->db->insert_id();
			$this->cart->destroy();
		}
		$this->db->where('id',$invoice);
		$test['content'] = $this->db->get('last_order');
		if($invoice==null){
			redirect('/');
		}else{
			$this->load->view('success',$test);
		}
		
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(225,255,255); // array, default is array(255,255,255)
        $config['white']        = array(0,0,0); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$invoice.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $this->generateRandomString(20); //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
	}
		
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
	}
	public function tambahpelanggan(){
		$this->header();
		$this->load->view('tambahpelanggan');
	}
	public function last_order(){
		$this->header();
		$this->load->view('last_order');
	}
	public function testsession(){
		echo $this->session->userdata('idpelanggan');
	}
}
