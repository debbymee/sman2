<?php 
class Guru extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_guru');
        $this->load->helper('date');
        $this->load->model('m_wali');

	
		if ($this->session->userdata('role_id_fk')!='2')
		{
	 		redirect(base_url('loginbaru'));

	 	} 
	}
	public function index()
	{ 

        $tgl = "%Y-%m-%d";
		$data = array(

			'judul' => 'dashboard guru'
		);
		$data['graph'] = $this->m_wali->graph();
		$data['content']   =  'view_guru/dashboard';
		$data['guru'] = $this->m_guru->countguru();
		$data['wali'] = $this->m_guru->countwali();
		$data['siswa'] = $this->m_guru->countsiswa();
		$id_guru = $this->session->userdata('id_guru');
		$row = $this->m_guru->tampilhadirsemua($id_guru,$tgl);
		$data['total']          = $row->total;
		$data['presensikehadiran'] = $this->m_guru->tampilhadir($id_guru,$tgl);
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

	$id_guru = $this->session->userdata('id_guru');
	$row   = $this->m_guru->get_idkelas($id_guru);
	$id_kelas = $row->id_kelas; 
	$data['kelas'] = $row->nama_kelas;
	$data['jadwal_pelajaran'] = $row->nama_pelajaran;
	$data['presensi'] = $this->m_guru->tampil_presensi3($id_guru);
	//$data['siswa'] = $this->m_data->tampil_psiswa()->result();
	$data['content']   =  'view_guru/detail_presensi3';
    $this->load->view('templates_guru/templates_guru',$data); 

	}
	
	public function input_presensi12()
	{
		$id_guru = $this->session->userdata('id_guru');
		$row   = $this->m_guru->get_idkelas($id_guru);
		$id_kelas = $row->id_kelas; 
		$data['kelas'] = $row->nama_kelas; 
		$data['siswa'] = $this->m_guru->tampil_namasiswa($id_guru)->result();
		$data['jadwalll'] = $this->m_guru->tampil_jadwalll($id_guru)->result();
		$data['keterangan_presensi'] = $this->m_guru->tampil_keterangan()->result();
		$data['content']   =  'view_guru/inputpresensi12';
   		$this->load->view('templates_guru/templates_guru',$data);
	
		

	}

	public function tambah_presensi12()
	{

		$cektgl = $this->input->post('tglcek');
		$cekid_jadwal  = $this->input->post('id_jadwal');
		$cek_tgl = $this->m_guru->cek_absen($cektgl);
		$cekjadwalpresensi = $this->m_guru->getmapelpresensi($cekid_jadwal);
		$jadwal_pelajaran = $this->m_guru->get_mjadwalpresensi($cekid_jadwal);
		if (count($jadwal_pelajaran) > 0 && $cek_tgl > 0 && count($cekjadwalpresensi) > 0) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Absensi Sudah Ada! </div>');
			redirect('guru/lihat_presensi12');

		} else {
		 	$no=1;
						
			$nm = $this->input->post('id_siswa');
			$id_jadwal = $this->input->post('id_jadwal_fk');
			$tanggal = $this->input->post('tgl');
		    $result = array();
		    foreach($nm AS $key => $val){
			    $result[] = array(
				    "tgl"  => $tanggal,
				    "kd_keterangan_fk"  => $_POST['kd_keterangan'][$key],
				    "id_jadwal_fk"  => $id_jadwal,
				    "id_siswa_fk"  => $_POST['id_siswa'][$key]
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
		$data['keterangan_presensi'] = $this->m_guru->tampil_keterangan()->result();

			$data['content']   =  'view_guru/edit_presensi12';
   		$this->load->view('templates_guru/templates_guru',$data);

	

	}
		public function update_presensi12()
	{
	
		$config['upload_path']      = 'foto/presensi/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = '2000';
            $config['max_width']        = '3000';
            $config['max_height']       = '3000';       
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";
                    $error = $this->upload->display_errors();
                }else{
                    $gambar=$this->upload->file_name;
                }

		$kd_keterangan = $this->input->post('kd_keterangan');
		$id_presensi = $this->input->post('id_presensi');
	 
		$data = array(

			'kd_keterangan_fk' => $kd_keterangan,
			'foto' => $gambar

		);
	 
		
		
	 
		$this->m_guru->update_presensi12( $id_presensi,$data);
		redirect('guru/lihat_presensi12');
	
		
	}
	function get_jadwalpresensi(){
        $id=$this->input->post('id');
        $data=$this->m_guru->get_mjadwalpresensi($id);
        echo json_encode($data);
    }

    function laporan(){

        $id_guru = $this->session->userdata('id_guru');
    	$data['jadwalll'] = $this->m_guru->tampil_jadwal_laporan($id_guru)->result();
    	$data['content']   =  'view_guru/formlaporan';
   		$this->load->view('templates_guru/templates_guru',$data);
    }

    function lihat_laporan_presensi(){

    	$tgl=$this->input->post('tgl');
    	$id=$this->input->post('id_jadwal');

    	$data['presensi'] = $this->m_guru->tampil_jadwal_laporan($tgl,$id)->result();
    	$data['content']   =  'view_guru/tampillaporanpresensi';
   		$this->load->view('templates_guru/templates_guru',$data);





    }

    
			

}
