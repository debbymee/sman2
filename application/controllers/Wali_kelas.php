<?php 
class Wali_kelas extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_wali');
	
		if ($this->session->userdata('role_id_fk')!='3')
		{
	 		redirect(base_url('loginbaru'));

	 	} 
	}
	public function index()
	{ 

		$data['graph'] = $this->m_wali->graph();
		$data['content']   =  'view_wali/dashboard';
        $this->load->view('templates_wali/templates_wali',$data); 
	}
	public function bio_wali($id)
	{
		
	
		$data['wali'] = $this->m_wali->tampil_wali($id);
		
		$data['content']   =  'view_wali/bio_wali';
        $this->load->view('templates_wali/templates_wali',$data);

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
		$data['content']   =  'view_wali/edit_pass';
        $this->load->view('templates_wali/templates_wali',$data);

		

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

		$this->m_wali->update_pass($data, $id);
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">Password berhasil diubah, silahkan login kembali! </div>');
		redirect('loginbaru');
	
		
	}

	public function lihat_presensi() 
	{

    $id_guru = $this->session->userdata('id_guru');
	$row   = $this->m_wali->get_idkelas($id_guru);
	$id_kelas = $row->id_kelas; 
	$data['kelas'] = $row->nama_kelas;
	$data['jadwal_pelajaran'] = $row->nama_pelajaran;
	$data['presensi'] = $this->m_wali->tampil_presensi3($id_guru);

	$data['content']   =  'view_wali/lihat_presensi';
    $this->load->view('templates_wali/templates_wali',$data);

		
	}
		public function input_presensi12()
	{
		$id_guru = $this->session->userdata('id_guru');
		$row   = $this->m_wali->get_idkelas($id_guru);
		$id_kelas = $row->id_kelas; 
		$data['kelas'] = $row->nama_kelas; 
		$data['siswa'] = $this->m_wali->tampil_namasiswa($id_guru)->result();
		$data['jadwalll'] = $this->m_wali->tampil_jadwalll($id_guru)->result();
		$data['keterangan_presensi'] = $this->m_wali->tampil_keterangan()->result();
		$data['content']   =  'view_wali/inputpresensi12';
   		$this->load->view('templates_wali/templates_wali',$data);
	}
		

	function get_jadwalpresensi(){
        $id=$this->input->post('id');
        $data=$this->m_wali->get_mjadwalpresensi($id);
        echo json_encode($data);
    }

    public function tambah_presensi12()
	{

		$cektgl = $this->input->post('tglcek');
		$cekid_jadwal  = $this->input->post('id_jadwal');
		$cek_tgl = $this->m_wali->cek_absen($cektgl);
		$cekjadwalpresensi = $this->m_wali->getmapelpresensi($cekid_jadwal);
		$jadwal_pelajaran = $this->m_wali->get_mjadwalpresensi($cekid_jadwal);
		if (count($jadwal_pelajaran) > 0 && $cek_tgl > 0 && count($cekjadwalpresensi) > 0) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Absensi Sudah Ada! </div>');
			redirect('Wali_kelas/lihat_presensi');

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
		$this->m_wali->input_presensi12($result);

		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert"> Berhasil Dibuat! </div>');
		redirect('Wali_kelas/lihat_presensi');
    }

    public function lihat_laporan() 
	{

	    $id_guru = $this->session->userdata('id_guru');
    	$data['jadwalll'] = $this->m_wali->tampil_jadwal_laporan($id_guru)->result();
    	$data['content']   =  'view_wali/formlaporan';
   		$this->load->view('templates_wali/templates_wali',$data);

		
	}

    function lihat_laporan_presensi(){

    	$this->load->library('Pdf');
		$data['nama'] = $this->session->userdata('nama_guru');
        $tgl = $this->input->post('tgl');
        $data['jadwal'] = $this->input->post('tgl');
        $id_jadwal = $this->input->post('id_jadwal');
        $id_wali = $this->session->userdata('id_wali');
        
        $row   = $this->m_wali->get_kelaswali($id_wali);
	    $id_kelas = $row->id_kelas; 
	    $data['kelas'] = $row->nama_kelas;

	    $rowjadwal   = $this->m_wali->get_jadwal($id_jadwal);
	    $data['jam_pelajaran'] = $rowjadwal->jam_pelajaran;
	    $data['nama_pelajaran'] = $rowjadwal->nama_pelajaran;



    	$data['siswa'] = $this->m_wali->tampil_presensi_laporan($id_jadwal,$tgl)->result();
    	$data['content']   =  'view_wali/lihat_laporan';


   		$html = $this->load->view('templates_wali/templates_wali',$data); 
	    $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('view_wali/lihat_laporan', $data);
    }

	
}
