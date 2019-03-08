<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {


	public function index()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		if ($user == 'admin' && $pass == 'admin123') {

		$this->session->set_userdata('username', $user);
		redirect('Pengelola/C_Dashboard','refresh');
		}

		else{
			$this->load->view('Pengelola/V_LoginAdmin');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Pengelola/Login.php */