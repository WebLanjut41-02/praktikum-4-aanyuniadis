<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_kontak extends CI_Controller {

	public function index()
	{
		$this->load->view('Project/kontak');
	}
	public function header()
	{
		$this->load->view('Project/header');
	}

	public function footer()
	{
		$this->load->view('Project/footer');
	}

	public function body()
	{
		$this->load->view('Project/kontak');
	}
	public function col()
	{
		$this->load->view('Project/header');
		$this->load->view('Project/kontak');
		$this->load->view('Project/footer');
	}

	}

/* End of file C_kontak.php */
/* Location: ./application/controllers/Project/C_kontak.php */

?>