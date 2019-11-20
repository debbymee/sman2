<?php 
class Wali_kelas extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_wali');
	
		if ($this->session->userdata('role_id')!='3') {
	 		redirect(base_url('loginbaru'));

	 	} 
	}
	public function index()
	{ 


		$data = array(

			'judul' => 'dashboard_wali'
		);
		$this->load->view('templates_wali/header_wali',$data);
		$this->load->view('view_wali/dashboard',$data);
		$this->load->view('templates_wali/footer_wali');
	}
	public function bio_wali($id)
	{
		
	
		$data['wali'] = $this->m_wali->tampil_wali($id);
		

		$this->load->view('templates_wali/header_wali');
		$this->load->view('view_wali/bio_wali',$data);
		$this->load->view('templates_wali/footer_wali');

	}
		public function edit_wali()
	{
		$id = $this->uri->segment(3);
		$data['guru'] = $this->m_wali->tampil_guru($id)->result();
		$data['wali'] = $this->m_wali->edit_wali($id);

		$this->load->view('templates_wali/header_wali',$data);
		$this->load->view('view_wali/edit_wali',$data);
		$this->load->view('templates_wali/footer_wali', $data);
		
	}
		
	public function update_wali()
	{
	
		$kode2 = $this->input->post('id_guru');
		$nama_guru = $this->input->post('nama_guru');
		$jk = $this->input->post('jk');
		$nip = $this->input->post('nip');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		

	 
		$data = array(
			
			'nama_guru'=> $nama_guru,
			'jk'=> $jk,
			'nip' => $nip,
			'alamat'=> $alamat,
			'no_hp' => $no_hp
		
			


		);
	 
		
	 
		$this->m_wali->update_wali($kode2,$data);
		redirect('Wali_kelas/bio_wali/'.$this->session->userdata('id'));
	
		
	}
		public function edit_pass($id)
	{

			//$where = array('id' => $id );

		$data['login'] = $this->m_wali->edit_pass($id);
			

		$this->load->view('templates_wali/header_wali');
		$this->load->view('view_wali/edit_pass',$data);
		$this->load->view('templates_wali/footer_wali');

	}
		public function update_pass()
	{
	
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	

		
	 
		$data = array(
			'username' => $username,
			'password' => $password,
			

		);
	 
		
	 
		$this->m_wali->update_pass($data, $id);
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Password berhasil diubah, silahkan login kembali! </div>');
		redirect('loginbaru');
	
		
	}

	public function lihat_presensi() 
	{

	$id_wali = $this->session->userdata("id_wali");

	$data['presensi'] = $this->m_wali->tampil_presensi($id_wali);

	$this->load->view('templates_wali/header_wali');
	$this->load->view('view_wali/lihat_presensi',$data);
	$this->load->view('templates_wali/footer_wali');
		
	}

	
}
