                <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> DAFTAR PRESENSI SISWA KELAS 12</h2>
		<hr>
		 <br><br>
		 <?= $this->session->flashdata('message'); ?>
      
		<a href="<?php echo base_url(); ?>Guru/daftarkelas_presensi3"> <button type="button" class="btn btn-success btn-lg"  > + INPUTKAN PRESENSI</button> </a>
		 <br><br>


			<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
			<thead>
		
			<tr> 
				<td>NO</td>
				<td>TANGGAL</td>
				<td>NAMA SISWA</td>
				<td>KELAS</td>
         		<td>JADWAL PELAJARAN</td>
         		<td>JAM PELAJARAN</td>
         		<td>KETERANGAN</td>
         		<td>LAMPIRAN</td>
         		<td>AKSI</td>
			</tr>
			</thead>
			<tbody>
            <?php
            $no = 1; 
            foreach($presensi as $p) { ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $p->tgl  ?></td>
					<td><?php echo $p->nama_siswa  ?></td>
					<td><?php echo $p->nama_kelas ?></td>
                   	<td><?php echo $p->nama_pelajaran ?></td>
                    <td><?php echo $p->jam_pelajaran  ?></td>
					<td><?php echo $p->nama_keterangan  ?></td>
					<td>
						<?php if ($p->foto == '' || $p->foto==null) { ?>  
						<?php echo "-";?>

						 <?php } else { ?>
						 	<a href="<?php echo base_url('foto/presensi/'.$p->foto);?>">Lihat disini</a>

						<?php } ?>

						
					</td>
						
						

	
					<td>
			 	<?php echo anchor('admin/edit_presensi12/'.$p->id_presensi,'<i class="fas fa-edit"></i>'); ?>
				
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