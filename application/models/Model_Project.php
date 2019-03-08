<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Project extends CI_Model {

	public function getModelProject()
	{
		$query = $this->db->query('SELECT nama_project, tgl_awal_donasi, tgl_akhir_donasi, detail_donasi, foto from project')->result();
		return $query;
	}	

}

/* End of file Model_Project.php */
/* Location: ./application/models/Model_Project.php */