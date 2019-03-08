<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Benefit extends CI_Model {

	public function getBenefit()
	{
		$query = $this->db->query('SELECT level, desc_benefit, tgl_pengiriman FROM benefit')->result();
		return $query;
	}

}

/* End of file Model_Benefit.php */
/* Location: ./application/models/Model_Benefit.php */