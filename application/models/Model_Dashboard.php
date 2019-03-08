<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Dashboard extends CI_Model {

	public function DaftarProject()
	{
		$this->db->from('project');
		$query = $this->db->get();
		return $query->result();
	}	

}

/* End of file Model_Dashboard.php */
/* Location: ./application/models/Model_Dashboard.php */