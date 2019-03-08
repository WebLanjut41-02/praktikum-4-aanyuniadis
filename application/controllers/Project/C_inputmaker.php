<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inputmaker extends CI_Controller {

	public function __construct()
	  {
	  	parent::__construct();
	  	$this->load->model('Model_inputmaker');
	  	$this->load->helper('url');
	  	$this->load->library("pagination");
	  }
	public function index(){
	    $data = $this->Model_inputmaker->inputdataproject();
	    $this->session->set_userdata('inputdataP', $data);
	    $this->load->view('Project/head');
		$this->load->view('Project/header');
	  	$this->load->view('Project/inputmaker');
	  	$this->load->view('Project/footer');
	  }
	  public function prosesinputmaker(){
	  	if(isset($_POST['submit'])){
			$ID_project = $this->input->post('id_project');
			$namaproject = $this->input->post('nama_project');
			$danaproject= $this->input->post('dana_dibutuhkan');
			$jatuhtempo = $this->input->post('jatuh_tempo');
			$detailproject = $this->input->post('detail_project');
			$this->Model_inputmaker->inputproject($ID_project,$namaproject,$danaproject,$jatuhtempo,$detailproject);
			redirect('Project/C_inputmaker');
		}
	}
	public function getmaker()
	{
		$data = $this->Model_inputmaker->getmaker();
		$this->session->set_userdata('daftar_maker', $data);
		$this->load->view('Project/Head');
		$this->load->view('Project/Header');
		$this->load->view('Project/tampilmaker');
		$this->load->view('Project/Footer');
	}

	public function cari(){
		$this->load->view('search');
	}
	public function hasil(){
	$data2['cari'] = $this->Model_inputmaker->carijudul();
	$this->load->view('result', $data);
	}
	public function pagin() {
        $config = array();
        $config["base_url"] = base_url() . "welcome/pagin";
        $config["total_rows"] = $this->Model_inputmaker->record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Model_inputmaker->
            datamaker($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("pagin", $data);
    }
}


/* End of file C_inputmaker.php */
/* Location: ./application/controllers/Project/C_inputmaker.php */
?>