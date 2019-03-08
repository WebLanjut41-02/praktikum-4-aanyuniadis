<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detailartkel extends CI_Controller {

	public function index()
	{
	$this->load->view('Project/detailartikel');
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
		$this->load->view('Project/detailartikel');
	}

	public function col()
	{
		$this->load->view('Project/header');
		$this->load->view('Project/detailartikel');
		$this->load->view('Project/footer');
	}


}

/* End of file C_detailartkel.php */
/* Location: ./application/controllers/Project/C_detailartkel.php */

?>