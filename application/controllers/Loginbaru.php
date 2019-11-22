

<?php 
class Loginbaru extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_login');
		$this->load->library('session');
		
	}
	public function index()
	{ 

		$this->form_validation->set_rules('username', 'username','required');
		$this->form_validation->set_rules('password','password','required');

		if ($this->form_validation->run() == false) {
			
			$data = array(
				"judul" => "login sma2"
			
			);
			$this->load->view('templates_login/login', $data);	
		}else{

			$this->login_val();
		}

	}	
	
	private function login_val(){
		

		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$password = md5($pass);
		
		$cek = $this->m_login->cek_login($username,$password);


		if ($cek > 0) {
			//cek akun sudah aktif
			if ($cek['is_active'] == 1) {
				//cek password dan menu nya
				if ($password == $cek['password']) {

					$data = [
						'id' => $cek['id'],
						'username' => $cek['username'],
						'role_id_fk' => $cek['role_id_fk'],
						'id_guru' => $cek['id_guru'],
						'id_wali' => $cek['id_wali'],
						'foto' => $cek['foto']
					];
					if ($cek['role_id_fk'] == '2') {
						$this->session->set_userdata($data);
						redirect('guru'); 
					}elseif ($cek['role_id_fk'] == '3'){
						$this->session->set_userdata($data);
						redirect('wali_kelas');
					}else{
						$this->session->set_userdata($data);
						redirect('admin');
					}
				}else{

				$this->session->set_flashdata('message', ' 
				<script>
  				alert("Password Salah!");
				</script>');
				 redirect('Loginbaru');

				}
				
			}else {

				$this->session->set_flashdata('message', ' 
				<script>
  				alert(" Akun Tidak Terdaftar!");
				</script>');
				 redirect('loginbaru');
				 
			}

			
		}else{
				$this->session->set_flashdata('message', ' 
				<script>
  				alert("Akun Anda Tidak Terdaftar!");
				</script>');
				 redirect('loginbaru');
		}


	}
	public function form() {
		$string = 'contoh pesan';
		$this->session->set_flashdata('role_id', $string);
		$this->load->view('form_flash');
	}
	public function hasil() {
		$this->load->view('hasil_flash');
	}
	function logout(){
	$this->session->sess_destroy();
	redirect(base_url('index'));
}

}


 ?>
