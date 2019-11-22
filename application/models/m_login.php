<?php 

	/**
	 * 
	 */
	class M_login extends CI_Model
	{	
		function cek_login($username,$password)
		{	
			
			$sql = "SELECT * FROM `users` LEFT JOIN guru ON users.id = guru.id_user_fk LEFT JOIN wali_kelas ON guru.id_guru = wali_kelas.id_guru_fk where users.username = '$username' and users.password='$password'";
			$cek = $this->db->query($sql);
			return $cek->row_array();
		}


	}

 