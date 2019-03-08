<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_regismaker extends CI_Model {

	public function getregis()
	{
		$this->db->from('project_maker');
		$query = $this->db->get();
		return $query->result();
	}
	public function inputregis($ID_maker,$namamaker,$ttlmaker,$Alamat,$Pekerjaan,$Email,$Password)
	{
		$data = array(
		'id_maker' => $ID_maker,
		'nama_maker' => $namamaker,
		'ttl_maker' => $ttlmaker,
		'alamat'=> $Alamat,
		'pekerjaan' => $Pekerjaan,
		'email'=> $Email,
		'password'=> $Password
	);
		$this->db->insert('project_maker', $data);
	}

}

/* End of file Model_regismaker.php */
/* Location: ./application/models/Model_regismaker.php */