<?php 
 
class proses_pendaftaran extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('pendaftaran');
    }
    public function register()
	{
		$validator = array('success' => false, 'messages' => array());

		$validate_data = array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			),
			array(
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required'
			),
			array(
				'field' => 'nik',
				'label' => 'Nik',
				'rules' => 'required|integer'
			),
			array(
				'field' => 'gender',
				'label' => 'Jenis Kelamin',
				'rules' => 'required'
			),
			array(
				'field' => 'no_hp',
				'label' => 'No Hp',
				'rules' => 'required|integer'
			)
		);

		$this->form_validation->set_rules($validate_data);
		$this->form_validation->set_message('integer', 'The {field} must be number');		
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run() === true) {

			$this->pendaftaran->register();

			$validator['success'] = true;
			$validator['messages'] = 'Successfully Registered';
		}
		else {
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
			}
		}

		echo json_encode($validator);

	}
}