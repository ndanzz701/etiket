<?php
class m_admin extends CI_Model
{
    function list_pelanggan(){
		$hasil=$this->db->get('login_user');
		return $hasil->result();
	}
	function tambah_pelanggan(){
		$data = array(
				'nama' 	=> $this->input->post('nama'), 
				'nik' 	=> $this->input->post('nik'), 
				'gender' => $this->input->post('gender'), 
				'no_hp' => $this->input->post('no_hp'), 
			);
		$result=$this->db->insert('data_pelanggan',$data);
		return $result;
	}
	function update_pelanggan(){
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$nik=$this->input->post('nik');
		$gender=$this->input->post('gender');
		$nohp=$this->input->post('nohp');

		$this->db->set('nama', $nama);
		$this->db->set('nik', $nik);
		$this->db->set('gender', $gender);
		$this->db->set('nohp', $nohp);
		$this->db->where('id', $id);
		$result=$this->db->update('login_user');
		return $result;
	}
	function delete_pelanggan(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('login_user');
		return $result;
	}
	function list_transportasi(){
		$hasil=$this->db->get('pswt_bdg');
		return $hasil->result();
	}
	function tambah_transportasi(){
		$data = array(
				'dari' 	=> $this->input->post('dari'), 
				'tujuan' 	=> $this->input->post('tujuan'), 
				'harga' => $this->input->post('harga'), 
				'maskapai' => $this->input->post('maskapai'),
				'tipe' => $this->input->post('tipe'),  
				'qty' => $this->input->post('qty'),  
			);
		$result=$this->db->insert('pswt_bdg',$data);
		return $result;
	}
	function update_transportasi(){
		$id=$this->input->post('id');
		$dari=$this->input->post('dari');
		$tujuan=$this->input->post('tujuan');
		$harga=$this->input->post('harga');
		$maskapai=$this->input->post('maskapai');
		$tipe=$this->input->post('tipe');
		$qty=$this->input->post('qty');
		$this->db->set('dari', $dari);
		$this->db->set('tujuan', $tujuan);
		$this->db->set('harga', $harga);
		$this->db->set('maskapai', $maskapai);
		$this->db->set('qty', $qty);
		$this->db->set('tipe', $tipe);
		$this->db->where('id', $id);
		$result=$this->db->update('pswt_bdg');
		return $result;
	}
	function delete_transportasi(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('pswt_bdg');
		return $result;
	}
	function last_order(){
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->db->where('idpelanggan',$id);
		$this->db->where('status',$status);
		$hasil=$this->db->get('last_order');
		return $hasil->result();
	}
	function last_orderunconfirm(){
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->db->where('idpelanggan',$id);
		$this->db->where('status',$status);
		$hasil=$this->db->get('last_order');
		return $hasil->result();
	}
	function last_orderunconfirmpetugas(){
		$this->db->where('status',0);
		$hasil=$this->db->get('last_order');
		return $hasil->result();
	}
	function last_orderpetugas(){
		$this->db->where('status',1);
		$hasil=$this->db->get('last_order');
		return $hasil->result();
	}
	function list_user(){
		$hasil=$this->db->get('login_user');
		return $hasil->result();
	}
	function update_last_order(){
		$id=$this->input->post('id');
		$confirm=$this->input->post('confirm');
		$this->db->set('status', $confirm);
		$this->db->where('id', $id);
		$result=$this->db->update('last_order');
		return $result;
	}
	function tambah_user(){
		$data = array(
				'username' 	=> $this->input->post('username'), 
				'password' 	=> $this->input->post('password'), 
				'email' => $this->input->post('email'), 
			);
		$result=$this->db->insert('login_user',$data);
		return $result;
	}
	function update_user(){
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$this->db->set('username', $username);
		$this->db->set('password', $password);
		$this->db->set('email', $email);
		$this->db->where('id', $id);
		$result=$this->db->update('login_user');
		return $result;
	}
	function delete_user(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('login_user');
		return $result;
	}
}