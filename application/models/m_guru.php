<?php 
 /**
  * 
  */
 class M_guru extends CI_Model
 {
 // 	function tampil_nickname($id)
	// {
	// //return $this->db->get('guru');
	// $this->db->select('nama_guru');
	// $this->db->from('guru');
	// $this->db->join('login', 'guru.id_user = login.id');
	// $this->db->where('id_user', $id);
	// return $this->db->get()->result();

	// }
 	function tampil_guru($id)
	{
	//return $this->db->get('guru');
	$this->db->select('*');
	$this->db->from('guru');
	$this->db->join('users', 'guru.id_user_fk = users.id');
	$this->db->where('id', $id);
	return $this->db->get()->result();

	}
	function edit_guru($id)
	{
		return $this->db->get_where('guru',array('id_guru' => $id))->row();
	}
	function update_guru($kode2,$data)
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
	
		function tampil_guruu()
	{
		return $this->db->get('guru');
	}
	
// MODEL PRESENSI
		function tampil_presensi1()
	{   


		$this->db->select('*');
		$this->db->from('presensi');
		$this->db->join('siswa', 'presensi.id_siswa = siswa.id_siswa');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel');
		$this->db->join('keterangan', 'presensi.kd_keterangan = keterangan.kd_keterangan');
		$this->db->join('jadwalpelajaran', ' presensi.id_jadwal = jadwalpelajaran.id_jadwal');
		$this->db->join('mata_pelajaran', 'jadwalpelajaran.kd_mapel = mata_pelajaran.kd_mapel');
	
		$this->db->where('tingkat_kelas = 10');

		return $this->db->get()->result();
		
	}
	function tampil_rombelpresensi()
	{
		$this->db->select('*');
		$this->db->from('rombel');
		$this->db->where('tingkat_kelas = 10');
		return $this->db->get();
	
	}
	function tampil_namasiswa($id_rombel)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel');
		$this->db->where('siswa.id_rombel', $id_rombel);
		return $this->db->get();
	
	}

	function eTampilPresensi($id_presensi){

		$sql = "SELECT * FROM presensi join siswa on presensi.id_siswa = siswa.id_siswa join rombel on siswa.id_rombel = rombel.id_rombel WHERE presensi.id_presensi = $id_presensi";
        $cek = $this->db->query($sql);
        return $cek->result();
	
	}

	function tampil_keterangan()
	{
		return $this->db->get('keterangan');
	
	}
	function tampil_jadwalll()
	{
		$this->db->select('*');
		$this->db->from('jadwalpelajaran');
		$this->db->join('mata_pelajaran', 'jadwalpelajaran.kd_mapel = mata_pelajaran.kd_mapel');
		return $this->db->get();
	}
	function input_presensi10($result)
	{
		$this->db->insert_batch('presensi',$result);
	}
	function cek_absen($cektgl,$cekrombel)
	{	
		$sql = "SELECT * FROM presensi join siswa on presensi.id_siswa = siswa.id_siswa join rombel on siswa.id_rombel = rombel.id_rombel WHERE presensi.tgl='$cektgl' and siswa.id_rombel=$cekrombel";
        $cek = $this->db->query($sql);
        return $cek->row();
	}
		function edit_presensi10($id_presensi)
	{

		return $this->db->get_where('presensi',array('id_presensi' => $id_presensi))->row();
	}
	function update_presensi10($id_presensi,$data){
		$this->db->where('id_presensi', $id_presensi);
		$this->db->update('presensi',$data);

	
		
	}

	//

	function tampil_presensi2()
	{   


		$this->db->select('*');
		$this->db->from('presensi');
		$this->db->join('siswa', 'presensi.id_siswa = siswa.id_siswa');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel');
		$this->db->join('keterangan', 'presensi.kd_keterangan = keterangan.kd_keterangan');
		$this->db->join('jadwalpelajaran', ' presensi.id_jadwal = jadwalpelajaran.id_jadwal');
		$this->db->join('mata_pelajaran', 'jadwalpelajaran.kd_mapel = mata_pelajaran.kd_mapel');

		$this->db->where('tingkat_kelas = 11');


		return $this->db->get()->result();
		
	}

	function tampil_rombelpresensi2()
	{
		$this->db->select('*');
		$this->db->from('rombel');
		$this->db->where('tingkat_kelas = 11');
		return $this->db->get();
	
	}
	function input_presensi11($result)
	{
		$this->db->insert_batch('presensi',$result);
	}
	function update_presensi11($id_presensi,$data){
		$this->db->where('id_presensi', $id_presensi);
		$this->db->update('presensi',$data);

	
		
	}
//
		function tampil_presensi3()
	{   


		$this->db->select('*');
		$this->db->from('presensi');
		$this->db->join('siswa', 'presensi.id_siswa_fk = siswa.id_siswa');
		$this->db->join('kelas', 'siswa.id_kelas_fk = kelas.id_kelas');
		$this->db->join('keterangan_presensi', 'presensi.kd_keterangan_fk = keterangan_presensi.kd_keterangan');
		$this->db->join('jadwal_pelajaran', ' presensi.id_jadwal_fk = jadwal_pelajaran.id_jadwal');
		$this->db->join('mata_pelajaran', 'jadwal_pelajaran.kd_mapel_fk = mata_pelajaran.kd_mapel');

		//$this->db->where('tingkat_kelas = 12');


		return $this->db->get()->result();
		
	}

	function tampil_rombelpresensi3()
	{
		$this->db->select('*');
		$this->db->from('rombel');
		$this->db->where('tingkat_kelas = 12');
		return $this->db->get();
	
	}
	function input_presensi12($result)
	{
		$this->db->insert_batch('presensi',$result);
	}
	function update_presensi12($id_presensi,$data){
		$this->db->where('id_presensi', $id_presensi);
		$this->db->update('presensi',$data);

	
		
	}


 }

 ?>