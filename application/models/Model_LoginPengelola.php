<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_LoginPengelola extends CI_Model {

	public function login_pengelola($user, $pass)
	{
		
		$this->db->from('admin');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);

		$query = $this->db->get();
		return $query->result();

	}

	public function getAdmin($id)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Model_LoginAdmin.php */
/* Location: ./application/models/Model_LoginAdmin.php */