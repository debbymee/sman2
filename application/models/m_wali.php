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
	$this->db->join('login', 'guru.id_user = login.id');
	$this->db->join('wali_kelas', 'guru.id_guru = wali_kelas.id_guru');
	$this->db->where('id_user', $id);
	return $this->db->get()->result();

	}
		function tampil_presensi($id_wali)
	{   


		$this->db->select('*');
		$this->db->from('presensi');
		$this->db->join('siswa', 'presensi.id_siswa = siswa.id_siswa');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel');
		$this->db->join('keterangan', 'presensi.kd_keterangan = keterangan.kd_keterangan');
		$this->db->join('jadwalpelajaran', ' presensi.id_jadwal = jadwalpelajaran.id_jadwal');
		$this->db->join('mata_pelajaran', 'jadwalpelajaran.kd_mapel = mata_pelajaran.kd_mapel');
		$this->db->where('rombel.id_wali', $id_wali);

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
		return $this->db->get_where('login',array('id' => $id))->row();
	}
		function update_pass($data,$id)
	{
		$this->db->where(['id' => $id]);
		return $this->db->update('login',$data);

	}

}

 ?>