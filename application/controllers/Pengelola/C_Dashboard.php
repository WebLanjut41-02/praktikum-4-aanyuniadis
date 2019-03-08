<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Dashboard');
	}

	public function index()
	{
		$data = $this->Model_Dashboard->DaftarProject();
		$this->session->set_userdata('daftar_project', $data);

		$this->load->view('Pengelola/Head');
		$this->load->view('Pengelola/Header');
		$this->load->view('Pengelola/body');
		$this->load->view('Pengelola/Footer');
	}

}

/* End of file C_Dashboard.php */
/* Location: ./application/controllers/Pengelola/C_Dashboard.php */