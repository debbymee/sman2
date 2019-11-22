<?php 

class Index extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{ 
		$data= array(
			"isi" => "view_awal/index",
			"judul_awal" => "SMAN 2 MJK"



		);

		$this->load->view('templates_awal/header', $data);
		$this->load->view('view_awal/index', $data);
		$this->load->view('templates_awal/footer', $data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index'));
	}

}


 ?>