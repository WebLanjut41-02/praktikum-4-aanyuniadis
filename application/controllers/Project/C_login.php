<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_login');
	    $this->load->helper('url');
	    $this->load->helper('form');
	    $this->load->model('Model_inputmaker');
	    $this->load->library('session');
	  }
	  public function index(){
	  	$this->load->view('Project/head');
		$this->load->view('Project/header');
	  	$this->load->view('Project/login');
	  }

	  public function proseslogin(){
	  	if(isset($_POST['submit'])){

	  		if ($_POST['email'] == "" OR $_POST['password'] == "") {
	  		echo "isi";
	  		redirect('Project/C_login');
	  		}

	  		else{

			$user = $this->input->post('email');
			$pass = $this->input->post('password');
			$cek = $this->Model_login->inputlogin($user,$pass);
			$hasil = count($cek);

			if($hasil>0){

				$this->load->view('Project/inputmaker');
			}
			else{
				echo "gagal";
				redirect('Project/C_login');
			}
		}
		}
	}

}
/* End of file C_login.php */
/* Location: ./application/controllers/Project/C_login.php */
?>
