
            <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> JADWAL PEMBELAJARAN KELAS XII SMAN 2 </h2>
		<hr>
		<?= $this->session->flashdata('message'); ?>
		
		<a href="<?php echo base_url(); ?>admin/form_jadwal12"> <button type="button" class="btn btn-success btn-lg"  > + TAMBAH JADWAL</button> </a>
		 <br><br>



	<form>
			<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
			<thead>
			<tr align="center">
				
				<td>Hari</td>
				<td>Jam Pelajaran</td>
				<td>Mata Pelajaran</td>
				<td>Kelas</td>
				<td>Nama Guru</td>
				<td>Aksi</td>
			</tr>
			</thead>

			<tbody>
			<?php 

			$no = 1;
			foreach($jadwalpelajaran as $jd) {

			?>
				<tr>
				
					<td><?php echo $jd->hari ?></td>
					<td><?php echo $jd->jam_pelajaran ?></td>
					<td><?php echo $jd->nama_pelajaran ?></td>
					<td><?php echo $jd->nama_kelas ?></td>
					<td><?php echo $jd->nama_guru ?></td>
			

					<td>
			 	<?php echo anchor('admin/edit_jadwal12/'.$jd->id_jadwal,'<i class="fas fa-edit"></i>'); ?>
				<?php echo anchor('admin/hapus_jadwal12/'.'?id_jadwal='.$jd->id_jadwal ,'<i class="fas fa-trash-alt"></i>'); ?> 
				</td>
					
				
				</tr>
		<?php } ?>
		</tbody>
		</table>
</form>

</div>
</div>
</div>
</div>
</div>