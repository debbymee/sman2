<?php 

/**
 * 
 */
class M_wali extends CI_Model
{
	
 	function tampil_wali($id)
	{
	//return $this->db->get('guru');
	$this->db->select('*');
	$this->db->from('guru');
	$this->db->join('users', 'guru.id_user_fk = users.id');
	$this->db->join('wali_kelas', 'guru.id_guru = wali_kelas.id_guru_fk');
	$this->db->where('id_user_fk', $id);
	return $this->db->get()->result();

	}
		function tampil_presensi($id_wali)
	{   


		$this->db->select('*');
		$this->db->from('presensi');
		$this->db->join('siswa', 'presensi.id_siswa_fk = siswa.id_siswa');
		$this->db->join('kelas', 'siswa.id_kelas_fk = kelas.id_kelas');
		$this->db->join('keterangan_presensi', 'presensi.kd_keterangan_fk = keterangan_presensi.kd_keterangan');
		$this->db->join('jadwal_pelajaran', ' presensi.id_jadwal_fk = jadwal_pelajaran.id_jadwal');
		$this->db->join('mata_pelajaran', 'jadwal_pelajaran.kd_mapel_fk = mata_pelajaran.kd_mapel');
		$this->db->where('kelas.id_wali_fk', $id_wali);

		return $this->db->get()->result();
		
	}
	 function tampil_guru($id)
	{
	//return $this->db->get('guru');
	$this->db->select('*');
	$this->db->from('guru');
	$this->db->join('login', 'guru.id_user = login.id');

	$this->db->where('id_guru', $id);
	return $this->db->get();

	}
	
	
	function edit_wali($id)
	{
		return $this->db->get_where('guru',array('id_guru' => $id))->row();
	}
		function update_wali($kode2,$data)
	{

		$this->db->where('id_guru', $kode2);
		$this->db->update('guru',$data);	

	}
		function edit_pass($id)
	{
		return $this->db->get_where('users',array('id' => $id))->row();
	}
		function update_pass($data,$id)
	{
		$this->db->where(['id' => $id]);
		return $this->db->update('users',$data);

	}

}

 ?>