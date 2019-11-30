
             <div class="x_panel">
				<div class="container">

		<h2 style="color: green " align="center"> DATA SISWA SMAN 2 MOJOKERTO</h2>
		<hr>

		<?= $this->session->flashdata('message'); ?>
      
		<a href="<?php echo base_url(); ?>admin/form_siswa"> <button type="button" class="btn btn-success btn-lg"  > + TAMBAH SISWA</button> </a>
		 <br><br>

	<form>
		<table id="datatable" class="table table-striped table-bordered">
			<thead>
			<tr align="center">
				<td>NO</td>
				<td>NAMA SISWA</td>
				<td>NIPD</td>
				<td>JK</td>
				<td>NISN</td>
				<td>TEMPAT LAHIR</td>
				<td>TANGGAL LAHIR</td>
				<td>NIK</td>
				<TD>AGAMA</TD>
				<td>ALAMAT</td>
				<td>KELAS</td>
				<td>NO HP ORTU</td>
				<td>AKSI</td>
			</tr>
			</thead>

			<tbody>

			<?php 
				$no = 1;
				foreach ($siswa as $sw){
			 ?>
			 <tr>
			 	<td><?php echo $no++ ?></td>
			 	<td><?php echo $sw->nama_siswa ?></td>
			 	<td><?php echo $sw->nipd ?></td>
			 	<td><?php echo $sw->jk ?></td>
			 	<td><?php echo $sw->nisn ?></td>
			 	<td><?php echo $sw->tempat_lahir ?></td>
			 	<td><?php echo $sw->tgl_lahir ?></td>
			 	<td><?php echo $sw->nik ?></td>
			 	<td><?php echo $sw->agama ?></td>
			 	<td><?php echo $sw->alamat ?></td>
			 	<td><?php echo $sw->nama_kelas ?></td>
			 	<td><?php echo $sw->no_hp_ortu; ?></td>
		
			 	<td>
			 	<a href="<?php echo site_url('admin/edit_siswa/'.$sw->id_siswa); ?>" class="btn btn-sm btn-info">Edit</a>
				 <a href="#" data-id="<?php echo $sw->id_siswa ?>" class="sa-remove-siswa btn btn-sm btn-danger">Hapus</a> 
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