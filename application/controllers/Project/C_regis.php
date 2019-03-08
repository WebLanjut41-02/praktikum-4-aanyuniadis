<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_regis extends CI_Controller {

	public function __construct()
	  {
	  	parent::__construct();
	  	$this->load->model('Model_regismaker');
	  }
	public function index(){
	    $data = $this->Model_regismaker->getregis();
	    $this->session->set_userdata('regiss', $data);
	    $this->load->view('Project/head');
		$this->load->view('Project/header');
	  	$this->load->view('Project/regis');
	  	$this->load->view('Project/footer');
	  }
	  public function regismaker(){
	  	if(isset($_POST['submit'])){
			$ID_maker= $this->input->post('id_maker');
			$namamaker = $this->input->post('nama_maker');
			$ttlmaker= $this->input->post('ttl_maker');
			$Alamat = $this->input->post('alamat');
			$Pekerjaan = $this->input->post('pekerjaan');
			$Email = $this->input->post('email');
			$Password = $this->input->post('password');
			$this->Model_regismaker->inputregis($ID_maker,$namamaker,$ttlmaker,$Alamat,$Pekerjaan,$Email,$Password);
			redirect('Project/C_login');
				}
		}
}

/* End of file C_regis.php */
/* Location: ./application/controllers/Project/C_regis.php */

?>