                <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> DAFTAR PRESENSI SISWA KELAS 12</h2>
		<hr>
		 <br><br>
 		 <table>
 	<tr>
 		<td><h2 style="color: green " id="tgl"><b>Tanggal</b></h2></td>
 		<td><h2 style="color: green " id="tgl"><b> : <input type="date" value="<?php echo $jadwal ?>" readonly></b></h2></td>
 	</tr>
 	<tr>
 		<td><h2 style="color: green " id="kelas"><b>KELAS</b></h2></td>
 		<td><h2 style="color: green " id="kelas"><b> : <?php echo $kelas?></b></h2></td>
 	</tr>
 	<tr>
 		<td><h2 style="color: green " id="kelas"><b>JADWAL PELAJARAN</b></h2></td>
 		<td><h2 style="color: green " id="kelas"><b> : <?php echo $nama_pelajaran?> / <?php echo $jam_pelajaran?></b></h2></td>
 	</tr>
 	<tr>
 		<td><h2 style="color: green " id="kelas"><b>WALI KELAS</b></h2></td>
 		<td><h2 style="color: green " id="kelas"><b> : <?php echo $nama?></b></h2></td>
 	</tr>
 	</table>
 				

		<br><br> 		
		<table class="table table-striped table-bordered table-hover table-condensed" >
			<thead>

			<tr align="center"> 
				<td>NO</td>
				<td>NAMA SISWA</td>
         		<td>KETERANGAN</td>
			</tr>
			</thead>
			<tbody>

            <?php
            $no = 1; 
            foreach($siswa as $keha) { ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $keha->nama_siswa  ?></td>
					<td><?php echo $keha->nama_keterangan  ?></td>
					
					
				</tr>
			<?php } 
			
			 ?>
		

			</table>
		</tbody>


</div>
</div>
</div>
</div>
</div>