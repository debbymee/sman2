<?php 
class Guru extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_guru');


	
		if ($this->session->userdata('role_id_fk')!='2')
		{
	 		redirect(base_url('loginbaru'));

	 	} 
	}
	public function index()
	{ 


		$data = array(

			'judul' => 'dashboard guru'
		);
		$data['content']   =  'view_guru/dashboard';
        $this->load->view('templates_guru/templates_guru',$data); 
	}
		public function nickname($id)
	{
		

		$data['guru'] = $this->m_guru->tampil_nickname($id);
		$data['judul'] = 'biodata pribadi';

		$this->load->view('templates_guru/header_guru');
		$this->load->view('view_guru/dashboard',$data);
		$this->load->view('templates_guru/footer_guru');

	}
	
	public function bio_guru($id)
	{
		

		$data['guru'] = $this->m_guru->tampil_guru($id);
		$data['judul'] = 'biodata pribadi';
		$data['content']   =  'view_guru/biodata_guru';
        $this->load->view('templates_guru/templates_guru',$data); 

		

	}
	public function edit_guru($id)
	{


		$data['guru'] = $this->m_guru->edit_guru($id);

		$this->load->view('templates_guru/header_guru',$data);
		$this->load->view('view_guru/edit_guru', $data);
		$this->load->view('templates_guru/footer_guru', $data);
		
	}
	public function update_guru()
	{
	
		$kode2 = $this->input->post('kode');
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
			'no_hp' => $no_hp,
		

		);
	 
		
	 
		$this->m_guru->update_guru($kode2,$data);
		redirect('guru/bio_guru/'.$this->session->userdata('id'));
	
		
	}
	public function edit_pass($id)
	{

			//$where = array('id' => $id );

		$data['login'] = $this->m_guru->edit_pass($id);
		$data['content']   =  'view_guru/edit_pass';
        $this->load->view('templates_guru/templates_guru',$data); 


	}
	public function update_pass()
	{
	
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$password = md5($pass);
		
		$data = array(
			'username' => $username,
			'password' => $password,
			

		);
	 
		
	 
		$this->m_guru->update_pass($data, $id);
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Password berhasil diubah, silahkan login kembali! </div>');
		redirect('loginbaru');
	
		
	}
	
	// CONTROLLER PRESENSI


// presensi 12

	public function lihat_presensi12() 
	{

	$data['presensi'] = $this->m_guru->tampil_presensi3();
	//$data['siswa'] = $this->m_data->tampil_psiswa()->result();
	$data['content']   =  'view_guru/detail_presensi3';
    $this->load->view('templates_guru/templates_guru',$data); 

	}
	public function daftarkelas_presensi3()
	{

		$data['rombel'] = $this->m_guru->tampil_rombelpresensi3()->result();
		$data['lihat_presensi'] = $this->m_guru->tampil_presensi3();
	
		
		$this->load->view('templates_guru/header_guru',$data);
		$this->load->view('view_guru/daftarkelas_presensi3', $data);
		$this->load->view('templates_guru/footer_guru', $data);

	}
	public function input_presensi12()
	{
		$id_rombel = $this->uri->segment(3);
		$data['siswa'] = $this->m_guru->tampil_namasiswa($id_rombel)->result();
		$data['jadwalll'] = $this->m_guru->tampil_jadwalll()->result();
		$data['keterangan'] = $this->m_guru->tampil_keterangan()->result();
	
		$this->load->view('templates_guru/header_guru',$data);
		$this->load->view('view_guru/inputpresensi12', $data);
		$this->load->view('templates_guru/footer_guru', $data);

		

	}

	public function tambah_presensi12()
	{


	$cektgl = $this->input->post('tglcek');
	$cekrombel = $this->input->post('rombelcek');

	$cek = $this->m_guru->cek_absen($cektgl,$cekrombel);

	if ($cek > 0) {
	// echo "<script>
	// alert('Data Absensi Sudah Ada');
	// window.location.href='/sman2app/home/input_presensi10/$cekrombel';
	// </script>";
		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Absensi Hari Ini Sudah ada! </div>');
		redirect('guru/lihat_presensi12');

	}else {
		 
				
	$nm = $this->input->post('id_siswa');
    $result = array();
    foreach($nm AS $key => $val){
    $result[] = array(
      "tgl"  => $_POST['tgl'][$key],
      "jam_datang"  => $_POST['jam_datang'][$key],
      "jam_pulang"  => $_POST['jam_pulang'][$key],
      "kd_keterangan"  => $_POST['kd_keterangan'][$key],
      "id_jadwal"  => $_POST['id_jadwal'][$key],
      "id_siswa"  => $_POST['id_siswa'][$key]

     );
    
   	
		}
	}
		$this->m_guru->input_presensi12($result);
	
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert"> Berhasil Dibuat! </div>');
		redirect('guru/lihat_presensi12');

		
	
}
	public function edit_presensi12($id_presensi)
	{
		
		$id_prensensi = $this->uri->segment(3);
		$data['siswa'] = $this->m_guru->eTampilPresensi($id_prensensi);
		$data['jadwalll'] = $this->m_guru->tampil_jadwalll()->result();
		$data['keterangan'] = $this->m_guru->tampil_keterangan()->result();

		$this->load->view('templates_guru/header_guru',$data);
		$this->load->view('view_guru/edit_presensi12', $data);
		$this->load->view('templates_guru/footer_guru', $data);

	

	}
		public function update_presensi12()
	{
	
		$jam_datang = $this->input->post('jam_datang');
		$jam_pulang = $this->input->post('jam_pulang');
		$kd_keterangan = $this->input->post('kd_keterangan');
		$id_jadwal = $this->input->post('id_jadwal');
		$id_siswa = $this->input->post('id_siswa');
		$id_presensi = $this->input->post('id_presensi');
		
	 
		$data = array(
			
			'jam_datang'=> $jam_datang,
			'jam_pulang'=> $jam_pulang,
			'kd_keterangan' => $kd_keterangan,
			'id_jadwal'=> $id_jadwal,
			'id_siswa' => $id_siswa
			
			


		);
	 
		
	 
		$this->m_guru->update_presensi12( $id_presensi,$data);
		redirect('guru/lihat_presensi12');
	
		
	}
}
