<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_LoginPengelola');
		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->model('Model_LoginPengelola');
		$this->load->model('Model_Project');

		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('Pengelola/V_LoginAdmin');	
	}

	public function ceklogin()
	{

		if (isset($_POST['submit'])) {
			
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$cek = $this->Model_LoginPengelola->login_pengelola($user, $pass);
			$hasil = count($cek);

			if ($hasil > 0) {
				
				redirect('Pengelola/C_Dashboard');
			}

			else
			{
				echo "gagal";
				redirect('Pengelola/C_Login');

			}

		}

	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Pengelola/Login.php */