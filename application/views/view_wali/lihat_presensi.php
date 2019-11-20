<div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> DAFTAR PRESENSI SISWA</h2>
		<hr>
		 <br><br>
		 <?= $this->session->flashdata('message'); ?>
     


		<div class="cari" style="float: right;">

		<input type="text"name="cari" placeholder="cari"> <input type="submit"class="btn btn-success" name="submit" value="cari" ><br><br><br>
		</div>


		<table class="table" >
			<tr> 
				<td>NO</td>
				<td>NAMA SISWA</td>
				<td>KELAS</td>
				<td>TANGGAL</td>
         		<td>JAM DATANG</td>
         		<td>JAM PULANG</td>
         		<td>KETERANGAN</td>
         		<td>JADWAL PELAJARAN</td>
         		<td>AKSI</td>
		

				
			</tr>
            <?php
            $no = 1; 
            foreach($presensi as $keha) { ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $keha->nama_siswa  ?></td>
					<td><?php echo $keha->nama_kelas ?></td>
					<td><?php echo $keha->tgl  ?></td>
                    <td><?php echo $keha->jam_datang  ?></td>
                    <td><?php echo $keha->jam_pulang  ?></td>
					<td><?php echo $keha->nama_keterangan  ?></td>
					<td><?php echo $keha->nama_pelajaran ?></td>
	
					<td>
			 	<?php echo anchor('wali_kelas/edit_presensi10/'.$keha->id_presensi,'<i class="fas fa-edit"></i>'); ?>
				
				</td>
					
					
				</tr>
			<?php } 
			
			 ?>
		

			</table>
</form>

</div>
</div>
</div>
</div>
</div>