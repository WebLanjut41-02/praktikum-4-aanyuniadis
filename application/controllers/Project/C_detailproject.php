<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detailproject extends CI_Controller {
	
	public function index()
	{
		$this->load->view('Project/head');
		$this->load->view('Project/header');
		$this->load->view('Project/detailproject');
	}
	
}

/* End of file C_detailproject.php */
/* Location: ./application/controllers/Project/C_detailproject.php */
?>