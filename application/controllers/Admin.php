<?php 
class Admin extends CI_Controller
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_data');
		$this->load->library('upload');
	
		if ($this->session->userdata('role_id_fk')!='1')
		{
	 		redirect(base_url('loginbaru'));

	 	} 
	 	

	}
	public function index()
	{ 
		$data = array(

			'judul' => 'sman2'
		);
		$data['content']   =  'view_admin/home';
        $this->load->view('templates/templates',$data); 
	}

	
		public function daftar_user()
	{

		$data['user'] = $this->m_data->tampil_datauser();
	
		$data['content']   =  'view_admin/user_management/daftar_user';
        $this->load->view('templates/templates',$data); 
		
	}


		public function tambah_user()
	{
		$data['role'] = $this->m_data->tampil_roleuser();
		$this->form_validation->set_rules('username', 'username','required|trim|is_unique[users.username]', [
			'is_unique' => 'username ini sudah terdaftar!']);
		$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]');

		
		if ($this->form_validation->run() == false) 
		{
			$data['judul'] = 'Halaman Registrasi';

		$data['content']   =  'view_admin/user_management/form_user';
        $this->load->view('templates/templates',$data); 
		 
			
		}else{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pass = md5($password);
		$role_id = $this->input->post('role');

		$data = array(
			'username'=> $this->input->post('username', true),
			'password'=> $pass,
			'role_id_fk' => $this->input->post('role', true),
			'is_active' => 1
			

			);
		$this->m_data->input_user($data, 'users');
	

		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Akun Berhasil Dibuat! </div>');
		redirect('admin/daftar_user');


		}
	}

		public function edit_user($id)
	{
		$data['role'] = $this->m_data->tampil_roleuser();
		$data['users'] = $this->m_data->edit_user($id);
		$data['content']   =  'view_admin/user_management/edit_user';

		$this->load->view('templates/templates',$data); 

	}


		public function update_user()
	{

		if($this->input->post('password') == '' || $this->input->post('password') == null){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$pass = md5($password);
		$role_id = $this->input->post('role');

		
	 
		$data = array(
			'username' => $username,
			'role_id_fk' => $role_id

		);

		}

		else{

		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pass = md5($password);
		$role_id = $this->input->post('role');

		
	 
		$data = array(
			'username' => $username,
			'password' => $pass,
			'role_id_fk' => $role_id

		);

		}
	
		
	 
		
	 
		$this->m_data->update_user($data, $id);
		redirect('admin/daftar_user');
	
		
	}
	public function hapus_user()
	{

		$this->db->delete('users', array('id'=> $this->input->get('id', FALSE)));
		if ($this->db->error()){

    	$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Data Tidak Bisa Hapus </div>');
    	redirect('admin/daftar_user');

								}
	}	
	


	// jadwal kelas 12

	public function daftar_jadwal12() 
	{



	$data['jadwalpelajaran'] = $this->m_data->tampil_jdwl12();
	//$data['rombel'] = $this->m_data->tampil_rombel();
	$data['content']   =  'view_admin/jadwal_pelajaran/jadwal_pelajaran12';

	$this->load->view('templates/templates',$data); 

	
	}
	public function form_jadwal12()
	{

		$data['kelas'] = $this->m_data->tampil_kelas();
		$data['guru'] = $this->m_data->tampil_guruu()->result();
		$data['mata_pelajaran'] = $this->m_data->tampil_detailj()->result();
		$data['content']   =  'view_admin/jadwal_pelajaran/form_jadwal12';

		$this->load->view('templates/templates',$data);

	}


	public function tambah_jadwal12()
	{

		$this->form_validation->set_rules('jam_pelajaran', 'jam_pelajaran', 'required|trim');
		$this->form_validation->set_rules('kd_mapel', 'mata_pelajaran', 'required|trim');

		
		if ($this->form_validation->run() == false) {

		$data['kelas'] = $this->m_data->tampil_kelas();
		$data['guru'] = $this->m_data->tampil_guruu()->result();
		$data['mata_pelajaran'] = $this->m_data->tampil_detailj()->result();
		$data['judul'] = 'Halaman Tambah Jadwal';

		$data['content']   =  'view_admin/jadwal_pelajaran/form_jadwal12';

		$this->load->view('templates/templates',$data);

	} else {
		
		$hari = $this->input->post('hari');
		$jam_pelajaran = $this->input->post('jam_pelajaran');
		$mata_pelajaran = $this->input->post('kd_mapel');
		$id_kelas = $this->input->post('id_kelas');
		$id_guru = $this->input->post('id_guru');

		$data = array(
			'hari' => $hari,
			'jam_pelajaran' =>$jam_pelajaran,
			'kd_mapel_fk' => $mata_pelajaran,
			'id_kelas_fk' => $id_kelas,
			'id_guru_fk' => $id_guru

			);
		$this->m_data->input_jadwal($data);

		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Jadwal Berhasil Dibuat! </div>');
		redirect('admin/daftar_jadwal12');
	}
		
	}
		public function edit_jadwal12($id)
	{
		
		
		$data['kelas'] = $this->m_data->tampil_kelas();
		$data['guru'] = $this->m_data->tampil_guruu()->result();
		$data['mata_pelajaran'] = $this->m_data->tampil_detailj()->result();
		$data['jadwal_pelajaran'] = $this->m_data->edit_jadwal($id)->row(1);

		$data['content']   =  'view_admin/jadwal_pelajaran/edit_jadwal12';

		$this->load->view('templates/templates',$data);
		

	}
	public function update_jadwal12()
	{
		$id_jadwal = $this->input->post('id_jadwal');
		$hari = $this->input->post('hari');
		$jam_pelajaran = $this->input->post('jam_pelajaran');
		$mata_pelajaran = $this->input->post('kd_mapel');
		$id_kelas = $this->input->post('id_kelas');
		$id_guru = $this->input->post('id_guru');

	
		$data = array(
			'id_jadwal' => $id_jadwal,
			'hari' => $hari,
			'jam_pelajaran' =>$jam_pelajaran,
			'kd_mapel_fk' => $mata_pelajaran,
			'id_kelas_fk' => $id_kelas,
			'id_guru_fk' => $id_guru

			);
	 
		 $this->m_data->update_jadwal($data, $id_jadwal);

		redirect('admin/daftar_jadwal12');
	
		
	}


	public function hapus_jadwal12()
	{

		$this->db->delete('jadwal_pelajaran', array('id_jadwal'=> $this->input->get('id_jadwal', FALSE)));
		redirect('admin/daftar_jadwal12');
	}


		public function lihat_presensi12() 
	{

	$data['presensi'] = $this->m_data->tampil_presensi3();
	//$data['guru'] = $this->m_data->tampil_pguru()->result();

	$data['content']   =  'view_admin/presensi_kehadiran/detail_presensi3';
	$this->load->view('templates/templates',$data);
	
	}

		public function daftarkelas_presensi3()
	{

		$data['rombel'] = $this->m_data->tampil_rombelpresensi3()->result();
		$data['lihat_presensi'] = $this->m_data->tampil_presensi3();
	
		// $data['guru'] = $this->m_data->tampil_guruu()->result();
		// $data['mata_pelajaran'] = $this->m_data->tampil_detailj()->result();
		$data['content']   =  'view_admin/presensi_kehadiran/daftarkelas_presensi3';
		$this->load->view('templates/templates',$data);


	}
		public function input_presensi12()
	{
		$urikelas = $this->uri->segment(4);
		$id_kelas_fk = $this->uri->segment(3); // mengambil get url urutan slice ke 3
		$data['kelas'] = urldecode($urikelas); //untuk menghilangkan %
		$data['siswa'] = $this->m_data->tampil_namasiswa($id_kelas_fk)->result();
		$data['jadwalll'] = $this->m_data->tampil_jadwalll($id_kelas_fk)->result();
		$data['keterangan_presensi'] = $this->m_data->tampil_keterangan()->result();
		$data['content']   =  'view_admin/presensi_kehadiran/inputpresensi12';
		$this->load->view('templates/templates',$data);
	

	}

		public function tambah_presensi12()
	{

		$cektgl = $this->input->post('tglcek');
		$cekid_jadwal  = $this->input->post('id_jadwal');
		$cek_tgl = $this->m_data->cek_absen($cektgl);
		$cekjadwalpresensi = $this->m_data->getmapelpresensi($cekid_jadwal);
		$jadwal_pelajaran = $this->m_data->get_mjadwalpresensi($cekid_jadwal);
		if (count($jadwal_pelajaran) > 0 && $cek_tgl > 0 && count($cekjadwalpresensi) > 0) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Absensi Sudah Ada! </div>');
			redirect('admin/lihat_presensi12');

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
		$this->m_data->input_presensi12($result);

		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert"> Berhasil Dibuat! </div>');
		redirect('admin/lihat_presensi12');
    }
		

	public function edit_presensi12($id_presensi)
	{
		
		$id_prensensi = $this->uri->segment(3);
		$data['siswa'] = $this->m_data->eTampilPresensi($id_prensensi);
		$data['keterangan_presensi'] = $this->m_data->tampil_keterangan()->result();
	
		$data['content']   =  'view_admin/presensi_kehadiran/edit_presensi12';
		$this->load->view('templates/templates',$data);
		
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
	 
		
	 
		$this->m_data->update_presensi12( $id_presensi,$data);
		redirect('admin/lihat_presensi12');
	
		
	}




// controller guru

	

	public function daftar_guru()
	{
		//$data['login'] = $this->m_data->tampil_datauser();

		$data['guru'] = $this->m_data->tampil_guru();
		$data['content'] = 'view_admin/guru/daftar_guru';


		$this->load->view('templates/templates', $data);
	

	}
	public function form_guru()
	{
		$data['users'] = $this->m_data->tampil_username()->result();
		$data['content'] = 'view_admin/guru/form_guru';


		$this->load->view('templates/templates', $data);



	}

	public function tambah_guru()
	{
	
		$this->form_validation->set_rules('nama_guru', 'nama_guru', 'required|trim|is_unique[guru.nama_guru]',[
			'is_unique' => 'nama guru sudah terdaftar !']);

		$this->form_validation->set_rules('nip', 'nip', 'required|trim|numeric|max_length[5]|is_unique[guru.nip]',[
			'is_unique' => 'nip tidak boleh sama !']);

		
		if ($this->form_validation->run() == false) 
		{
			$data['judul'] = 'Halaman Tambah Guru';
			$data['content'] = 'view_admin/guru/form_guru';
			$data['users'] = $this->m_data->tampil_username()->result();


		// $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Tidak Berhasil di tambahkan! </div>');
			$this->load->view('templates/templates', $data);

			
		}else{
		// $id_user = $this->input->post('id_guru');
		$config['upload_path']      = 'foto/guru/';
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

		$nama_guru = $this->input->post('nama_guru');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jk = $this->input->post('jk');
		$nip = $this->input->post('nip');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$id_user = $this->input->post('id_user');

		$data = array(

			'nama_guru'=> $this->input->post('nama_guru', true),
			'tgl_lahir' => $this->input->post('tgl_lahir', true),
			'jk'=> $this->input->post('jk', true),
			'nip' => $this->input->post('nip', true),
			'alamat'=> $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'id_user_fk' => $this->input->post('id_user'),
			'foto' => $gambar
			

			);
		$this->m_data->input_guru($data, 'guru');
		//$this->m_data->input_guru($this->input->post());
		
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Data Guru Berhasil Ditambahkan! </div>');
		redirect('admin/daftar_guru');


		}
	}

	public function edit_guru($id_guru)
	{
		$data['users'] = $this->m_data->tampil_username()->result();
		$data['guru'] = $this->m_data->edit_guru($id_guru);
		$data['content'] = 'view_admin/guru/edit_guru';


		$this->load->view('templates/templates', $data);

	}
	public function update_guru()
	{
	//$data['pembelajaran'] = $this->m_data->update_angkatan();
		$config['upload_path']      = 'foto/guru/';
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

		$kode2 = $this->input->post('kode');
		$nama_guru = $this->input->post('nama_guru');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jk = $this->input->post('jk');
		$nip = $this->input->post('nip');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$id_user = $this->input->post('id_user');

	 
		$data = array(
			
			'nama_guru'=> $nama_guru,
			'tgl_lahir'=> $tgl_lahir,
			'jk'=> $jk,
			'nip' => $nip,
			'alamat'=> $alamat,
			'no_hp' => $no_hp,
			'id_user_fk' =>$id_user,
			'foto' => $gambar
			


		);
	 
	
		$this->m_data->update_guru($kode2,$data);
		redirect('admin/daftar_guru');
	
		
	}
	public function hapus_guru()
	{

		$this->db->delete('guru', array('id_guru'=> $this->input->get('id', FALSE)));
		redirect('admin/daftar_guru');
	}
// CONTROLLER WALI

	public function daftar_wali()
	{
		$data['wali_kelas'] = $this->m_data->tampil_walikelas();
		$data['content']   =  'view_admin/data_wali/daftar_wali';
        $this->load->view('templates/templates',$data); 
	
	}
	public function form_wali()
	{
		//$data['wali_kelas'] = $this->m_data->tampil_wali();
		$data['guru'] = $this->m_data->tampil_guru();
		$data['content']   =  'view_admin/data_wali/form_wali';

        $this->load->view('templates/templates',$data);

	

	}

	public function tambah_wali()
	{
	
		$this->form_validation->set_rules('id_guru', 'id_guru', 'required|trim');

		
		if ($this->form_validation->run() == false) 
		{
			$data['judul'] = 'Halaman Tambah Wali';

		$this->load->view('templates_admin/header');
		$this->load->view('view_admin/data_wali/form_wali', $data);
		$this->load->view('templates_admin/footer');

			
		}else{

		$id_guru = $this->input->post('id_guru');

		$row   = $this->m_data->get_iduser($id_guru);
		$rowid = $row->id; 

		$this->m_data->updateuserwali($rowid);



		$data = array(
			'id_guru_fk'=> $this->input->post('id_guru', true)
			);
		$this->m_data->input_wali($data, 'wali_kelas');
	
		
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Akun Berhasil Dibuat! </div>');
		redirect('admin/daftar_wali');


		}
	}

		public function hapus_wali()
	{

		$id = $this->input->get('id');

		$row   = $this->m_data->get_iduserwali($id);
		$rowid = $row->id; 

		$this->db->delete('wali_kelas', array('id_wali'=> $this->input->get('id', FALSE)));
		// buat menangkap eror
		if ($this->db->error()){

    	$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Data Tidak Bisa Hapus </div>');
    	redirect('admin/daftar_wali');

								}
		$this->m_data->updatedeleteuserwali($rowid);

		

		
}


// CONTROLLER SISWA


	public function daftar_siswa()
	{
		$data['siswa'] = $this->m_data->tampil_siswa();
		$data['content'] = 'view_admin/data_siswa/daftar_siswa';


		$this->load->view('templates/templates', $data);

		
	}
	public function form_siswa()
	{
		
		$data['kelas'] = $this->m_data->tampil_kelas();
		$data['siswa'] = $this->m_data->tampil_siswa();
		$data['content'] = 'view_admin/data_siswa/form_siswa';


		$this->load->view('templates/templates', $data);


	}
			public function tambah_siswa()
	{
	
		$this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'required|trim');
		$this->form_validation->set_rules('nipd', 'nipd', 'required|trim|numeric|min_length[5]|max_length[5]');
		$this->form_validation->set_rules('nisn', 'nisn', 'required|trim|numeric|min_length[10]|max_length[10]');

		
		if ($this->form_validation->run() == false) 
		{
			$data['judul'] = 'Halaman Tambah Siswa';
			$data['content'] = 'view_admin/data_siswa/form_siswa';


			$this->load->view('templates/templates', $data);

			
		}else{

		

		$nama_siswa = $this->input->post('nama_siswa');
		$nipd = $this->input->post('nipd');
		$jk = $this->input->post('jk');
		$nisn = $this->input->post('nisn');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nik = $this->input->post('nik');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$id_kelas = $this->input->post('id_kelas_fk');
		$no_hp = $this->input->post('no_hp');
	

		$data = array(

			'nama_siswa'=> $this->input->post('nama_siswa', true),
			'nipd' => $this->input->post('nipd', true),
			'jk'=> $this->input->post('jk', true),
			'nisn' => $this->input->post('nisn'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'nik' => $this->input->post('nik'),
			'agama' => $this->input->post('agama'),
			'alamat'=> $this->input->post('alamat'),
			'id_kelas_fk' => $this->input->post('id_kelas'),
			'no_hp_ortu' => $this->input->post('no_hp')
						

			);
		$this->m_data->input_siswa($data, 'siswa');
		//$this->m_data->input_guru($this->input->post());
		
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Data Siswa Berhasil Ditambahkan! </div>');
		redirect('admin/daftar_siswa');

		}
	}
	public function edit_siswa($id_siswa)
	{
		$data['kelas'] = $this->m_data->tampil_kelas();
		//$data['presensi'] = $this->m_data->tampil_presensi()->result();
		$data['siswa'] = $this->m_data->edit_siswa($id_siswa);
		$data['content'] = 'view_admin/data_siswa/edit_siswa';


		$this->load->view('templates/templates', $data);


	}

	public function update_siswa()
	{
	//$data['pembelajaran'] = $this->m_data->update_angkatan();
		$kode2 = $this->input->post('kode');
		$nama_siswa = $this->input->post('nama_siswa');
		$nipd = $this->input->post('nipd');
		$jk = $this->input->post('jk');
		$nisn = $this->input->post('nisn');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nik = $this->input->post('nik');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$id_kelas = $this->input->post('id_kelas');
		$no_hp = $this->input->post('no_hp');
	
	 
		$data = array(
			
			'nama_siswa'=> $nama_siswa,
			'nipd' => $nipd,
			'jk'=> $jk,
			'nisn' => $nisn,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' =>$tgl_lahir,
			'alamat'=> $alamat,
			'id_kelas_fk' => $id_kelas,
			'no_hp_ortu' => $no_hp

		);
	 
	 
		$this->m_data->update_siswa( $kode2,$data);
		redirect('admin/daftar_siswa');
	
		
	}

	public function hapus_siswa()
	{

		$this->db->delete('siswa', array('id_siswa'=> $this->input->get('id', FALSE)));
		if ($this->db->error()){

    	$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Data Tidak Bisa Hapus </div>');
    	redirect('admin/daftar_siswa');

								}
	}
	function get_jadwalpresensi(){
        $id=$this->input->post('id');
        $data=$this->m_data->get_mjadwalpresensi($id);
        echo json_encode($data);
    }

	



}




 ?>
