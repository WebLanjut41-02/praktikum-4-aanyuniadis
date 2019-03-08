<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Admin extends CI_Model {

	public function getAdmin()
	{
		$this->db->from('admin');

		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Model_Header.php */
/* Location: ./application/models/Model_Header.php */