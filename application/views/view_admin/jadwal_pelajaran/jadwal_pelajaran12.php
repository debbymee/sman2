
            <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> JADWAL PEMBELAJARAN KELAS XII SMAN 2 </h2>
		<hr>
		<?= $this->session->flashdata('message'); ?>
		
		<a href="<?php echo base_url(); ?>admin/form_jadwal12"> <button type="button" class="btn btn-success btn-lg"  > + TAMBAH JADWAL</button> </a>
		 <br><br>



	<form>
			<table id="datatable" class="table table-striped table-bordered">
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
			 	<a href="<?php echo site_url('admin/edit_jadwal12/'.$jd->id_jadwal); ?>" class="btn btn-sm btn-info">Edit</a>
				 <a href="#" data-id="<?php echo $jd->id_jadwal ?>" class="sa-remove-jadwal btn btn-sm btn-danger">Hapus</a> 
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