<?php 


class aktivasi extends CI_Controller

{
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');	
		$this->load->model('m_data'); 	

	}
	public function aktivasi()

	{
		$data['judul'] = 'aktivasi akun' ;
		$this->load->view('templates_aktivasi/verifikasi', $data);
	}

	public function aktiv_val() 
	{
		$this->form_validation->set_rules('nip', 'nip','required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir','required|trim');



		$nip = $this->input->post('nip');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$guru = $this->m_data->tampil_guru();
		//$guru = $this->db->get_where('guru',['nipd' => $nipd],['tgl_lahir' => $tgl_lahir])->row_array();
		if ($guru) {
			// Jika user aktif
			if ($guru['is_active']==0) {
				//cek nip

				
				if ($guru['nip'] == $nip && $guru['tgl_lahir'] == $tgl_lahir) {
						$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> SUKSES !</div>');
						redirect('aktivasi/tambah');
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> nip dan Tanggal Lahir Tidak Sama!</div>');
					redirect('aktivasi/aktivasi');
				}
			} else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> nip Belum Aktif!</div>');
			redirect('aktivasi/aktivasi');

			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Masukkan nip dan Tanggal Lahir Anda! </div>');
			redirect('aktivasi/aktivasi');
		}
		

	}
		public function tambah(){

		$this->form_validation->set_rules('username', 'username','required|trim|is_unique[login.username]', [
			'is_unique' => 'username ini sudah terdaftar!']);
		$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]');
		// $this->form_validation->set_rules('password2', 'password2', 'required|trim|matches[password1]');


		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Halaman Registrasi';
			$this->load->view('templates_aktivasi/buat_akun', $data);
		}else{
			$data = [
				'username'=> $this->input->post('username', true),
				'password'=> $this->input->post('password', true),
				'tipe' => 'guru',
				'is_active' => 0

			
			];
			$this->m_data->registrasi_guru($data);
			//$this->db->insert('login', $data);
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Akun Berhasil Dibuat! Silahkan Login</div>');
			redirect('loginbaru');
		}
	}



}

?>