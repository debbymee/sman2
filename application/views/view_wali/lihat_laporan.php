                <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> DAFTAR PRESENSI SISWA KELAS 12</h2>
		<hr>
		 <br><br>

   <form action="<?php echo base_url(); ?>wali_kelas/tambah_presensi12" method ="post"  class="form-horizontal form-label-left" enctype="multipart/form-data" >



 		<h2 style="color: green " id="tgl">
 			<b> Wali Kelas : XII IPS 3 &nbsp;&nbsp;&nbsp;
 		
 			<b> <input type="date" value="<?php echo date('Y-m-d'); ?>">
 				<i class="far fa-calendar-alt"></i> 
 				&nbsp;&nbsp;&nbsp;<button>CETAK</button>

		<br><br> 		
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
			<thead>

			<tr align="center"> 
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
			</thead>
			<tbody>

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
		</tbody>
</form>

</div>
</div>
</div>
</div>
</div>