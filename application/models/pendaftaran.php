<?php 

class pendaftaran extends CI_Model 
{
	public function register()
	{
		$password = $this->input->post('password');

		$insert_data = array(
			'username' => $this->input->post('username'),
			'password' => $password,
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'nohp' => $this->input->post('no_hp')
		);

		$this->db->insert('login_user', $insert_data);
    }
}