<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Index extends CI_Controller {

	public function index()
	{
		$this->load->view('Project/head');
		$this->load->view('Project/header');
		$this->load->view('Project/index');
	}

}

/* End of file C_Index.php */
/* Location: ./application/controllers/Project/C_Index.php */
?>