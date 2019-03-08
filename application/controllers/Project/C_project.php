<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_project extends CI_Controller {

	public function project()
	{
		$this->load->view('Project/head');
		$this->load->view('Project/header');
		$this->load->view('Project/project');
	}


}

/* End of file C_project.php */
/* Location: ./application/controllers/Project/C_project.php */
?>