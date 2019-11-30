<?php 
 
class M_data extends CI_Model
{
	function tampil_guruw()
	{

		$this->db->select('*');
		$this->db->from('users');
		//$this->db->join('users', 'guru.id_user_fk = users.id');
	
		return $this->db->get();

 		//return $this->db->query("call tampil_guru();");
	}
	function registrasi_guru($data){
		//$this->db->insert($table,$data);
		$this->db->insert('users', $data);
			
	}
// update role nya di login
     function get_iduser($id_guru)
    {
      $this->db->select('*');    
      $this->db->from('users');
      $this->db->join('guru', 'users.id = guru.id_user_fk');
      $this->db->where('guru.id_guru', $id_guru);
      $query=$this->db->get();
      return $query->row();
    }

    function updateuserwali($rowid){
	
        $this->db->set('role_id_fk', 3);
        $this->db->where('id', $rowid);
		$this->db->update('users');
		
	}

	 function updatedeleteuserwali($rowid){
	
        $this->db->set('role_id_fk', 2);
        $this->db->where('id', $rowid);
		$this->db->update('users');
		
	}


// ini model biasa tabel pembelajaran
	function tampil_data(){
		return $this->db->get('pembelajaran');
	}

	function input_data($data,$table){
		$this->db->insert('pembelajaran',$data);
		
	}
	function tampil_pem()

	{
		return $this->db->get('pembelajaran');
	}

	function edit_angkatan($id){	


	return $this->db->get_where('pembelajaran',array('id' => $id))->row();
		
	}

	function update_angkatan($kode2,$data){
		$this->db->where('id', $kode2);
		$this->db->update('pembelajaran',$data);
		
	}
	public function hapus_data($table,$where){

		$this->db->where('id');
		$this->db->delete($table);
		// $query = $this->db->delete($table, $where);
		// return $query;
	
	}

	// model registrasi 
	function registrasi($data){
		//$this->db->insert($table,$data);
		$this->db->insert('login', $data);
			
	}

	//ini model user management

	function tampil_datauser()
	{
		$this->db->select('*');    
        $this->db->from('users');
        $this->db->join('user_role', 'users.role_id_fk = user_role.id_role','left');
        $query = $this->db->get();
        return $query->result();
	}
	function tampil_roleuser()
	{
		$this->db->select('*');
		$this->db->from('user_role');
		$query = $this->db->get();
        return $query->result();
			
	}

	function input_user($data)
	{
		$this->db->insert('users',$data);
		
	}

	function edit_user($id)
	{
		return $this->db->get_where('users',array('id' => $id))->row();
	}

	function update_user($data,$id)
	{
		$this->db->where(['id' => $id]);
		return $this->db->update('users',$data);

	}



	// INI MODEL GURU

		
	function tampil_guru()
	{

		$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('users', 'guru.id_user_fk = users.id');
	
		return $this->db->get()->result();

 		//return $this->db->query("call tampil_guru();");
	}
	
	function input_guru($data)
	{
		$this->db->insert('guru',$data);
		
	}
	function tampil_username()
	{
	return $this->db->get('users');
	}
	function edit_guru($id_guru)
	{
		return $this->db->get_where('guru',array('id_guru' => $id_guru))->row();
	}
	function update_guru($kode2,$data){
		$this->db->where('id_guru', $kode2);
		$this->db->update('guru',$data);

	
		
	}

	// ini model siswa
	function tampil_siswa()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('kelas', 'siswa.id_kelas_fk = kelas.id_kelas');
		//$this->db->where('id_guru');
		//return $this->db->get('guru');
		return $this->db->get()->result();
	}
	function tampil_kelas_siswa()
	{
		$this->db->select('*');
		$this->db->from('kelas');
	}


		function input_siswa($data)
	{
		$this->db->insert('siswa',$data);
		
	}
		function edit_siswa($id_siswa)
	{
		return $this->db->get_where('siswa',array('id_siswa' => $id_siswa))->row();
	}
	
	
		function update_siswa($kode2,$data){
		$this->db->where('id_siswa', $kode2);
		$this->db->update('siswa',$data);

	
		
	}

	// ini model wali



	function tampil_wali()
	{
		return $this->db->query("call tampil_wali();");
		// $this->db->select('*');
		// $this->db->from('wali_kelas');
		// $this->db->join('guru', 'wali_kelas.id_guru = guru.id_guru');

		// $query = $this->db->get();
		// return $query;
		

	}

	function tampil_walikelas()
	{

		$this->db->select('*');
		$this->db->from('wali_kelas');
		$this->db->join('guru', 'wali_kelas.id_guru_fk = guru.id_guru');
		$this->db->join('users', 'guru.id_user_fk = users.id');
		//$this->db->where('role_id_fk = 3');

		$query = $this->db->get();
		return $query->result();

	}
	
	function input_wali($data)
	{
	$this->db->insert('wali_kelas',$data);	
	}

	// ini model jadwalpelajaran

		function tampil_jdwl12()
	{
		$this->db->select('*');
		$this->db->from('jadwal_pelajaran');
		$this->db->join('mata_pelajaran', 'jadwal_pelajaran.kd_mapel_fk = mata_pelajaran.kd_mapel');
		$this->db->join('kelas', 'jadwal_pelajaran.id_kelas_fk = kelas.id_kelas');
		$this->db->join('guru', ' jadwal_pelajaran.id_guru_fk = guru.id_guru');
		

		$query = $this->db->get();
		return $query->result();
		
	}
		function tampil_detailj()
	{
		return $this->db->get('mata_pelajaran');
	}
		function tampil_guruu()
	{
		return $this->db->get('guru');
	}
		function tampil_kelas()
	{
		return $this->db->get('kelas')->result();
	}
	function input_jadwal($data)
	{
		$this->db->insert('jadwal_pelajaran',$data);
		//$this->db->where('tingkat_kelas = 10');
		
	}
	// 	function cek_jadwal($cekhari,$cekjam_mulai, $cekjam_selesai, $cek_mapel)
	// {	
	// 	$sql = "SELECT * FROM jadwalpelajaran join mata_pelajaran on jadwalpelajaran.kd_mapel = mata_pelajaran.kd_mapel  WHERE jadwalpelajaran.hari='$cekhari' and mata_pelajaran.kd_mapel='$cek_mapel'";
 //        $cek = $this->db->query($sql);
 //        return $cek->row();
	// }
		function edit_jadwal($id)
	{
		return $this->db->get_where('jadwal_pelajaran',array('id_jadwal' => $id));
	}

		function update_jadwal($data,$id)
	{

	$this->db->where('id_jadwal', $id);
	$this->db->update('jadwal_pelajaran',$data);
	}

	// MODEL PRESENSI



	function eTampilPresensi($id_presensi)
	{
		$this->db->select('*');
		$this->db->from('presensi');
		$this->db->join('siswa', 'presensi.id_siswa_fk = siswa.id_siswa');
		$this->db->join('kelas','siswa.id_kelas_fk = kelas.id_kelas');
		$this->db->join('jadwal_pelajaran', 'presensi.id_jadwal_fk = jadwal_pelajaran.id_jadwal');
		$this->db->join('mata_pelajaran', 'jadwal_pelajaran.kd_mapel_fk = mata_pelajaran.kd_mapel');
		$this->db->where('id_presensi', $id_presensi);
		return $this->db->get()->result();

	
	
	}

	function cek_absen($cektgl)
	{	
		$sql = "SELECT * FROM presensi where tgl = '$cektgl'";
        $cek = $this->db->query($sql);
        return $cek->row_array();
	}
	function get_mjadwalpresensi($id)
	{
        $this->db->select('*');
        $this->db->from('jadwal_pelajaran');
        $this->db->where('kd_mapel_fk', $id);

     	return $this->db->get()->result();
    }
    function getmapelpresensi($id)
    {
    	$this->db->select('*');
        $this->db->from('presensi');
        $this->db->join('jadwal_pelajaran', 'presensi.id_jadwal_fk = jadwal_pelajaran.id_jadwal');
        $this->db->join('mata_pelajaran', 'jadwal_pelajaran.kd_mapel_fk = mata_pelajaran.kd_mapel');
        $this->db->where('kd_mapel_fk', $id);

     	return $this->db->get()->result();

    	
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

	//	$this->db->where('tingkat_kelas = 12');


		
		
	}

	function tampil_rombelpresensi3()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		//$this->db->where('tingkat_kelas = 12');
		return $this->db->get();
	
	}
		function input_presensi12($result)
	{
		$this->db->insert_batch('presensi',$result);
	}
		function tampil_namasiswa($id_kelas_fk)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('kelas', 'siswa.id_kelas_fk = kelas.id_kelas');
		$this->db->where('siswa.id_kelas_fk', $id_kelas_fk);
		return $this->db->get();
	}


		function tampil_jadwalll($id_kelas_fk)
	{
		$this->db->select('*');
		$this->db->from('jadwal_pelajaran');
		$this->db->join('mata_pelajaran', 'jadwal_pelajaran.kd_mapel_fk = mata_pelajaran.kd_mapel');
		$this->db->group_by("kd_mapel_fk");
		$this->db->where('jadwal_pelajaran.id_kelas_fk', $id_kelas_fk);
		return $this->db->get();
	}

	function tampil_keterangan()
	{
		return $this->db->get('keterangan_presensi');
	
	}
		function update_presensi12($id_presensi,$data){
		$this->db->where('id_presensi', $id_presensi);
		$this->db->update('presensi',$data);
	}

	function get_iduserwali($id)
    {
      $this->db->select('users.id');    
      $this->db->from('users');
      $this->db->join('guru', 'users.id = guru.id_user_fk');
      $this->db->join('wali_kelas', 'guru.id_guru = wali_kelas.id_guru_fk');
      $this->db->where('wali_kelas.id_wali', $id);
      $query=$this->db->get();
      return $query->row();
    }

}

