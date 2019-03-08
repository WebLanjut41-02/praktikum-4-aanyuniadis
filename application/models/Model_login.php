<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function inputlogin($user,$pass)
	{
		$this->db->from('project_maker');
		$this->db->where('email', $user);
		$this->db->where('password', $pass);
		$query=$this->db->get();
		return $query->result();
	}

}

/* End of file Model_login.php */
/* Location: ./application/models/Project/Model_login.php */