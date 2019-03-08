<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Model_Admin');
		$data = $this->Model_LoginPengelola->getAdmin($user);
		$this->load->view('Pengelola/Header', $data);
	}

}

/* End of file C_Admin.php */
/* Location: ./application/controllers/Pengelola/C_Admin.php */