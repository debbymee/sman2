
                <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> DATA WALI KELAS SMAN 2 MOJOKERTO</h2>
		<hr>

		<?= $this->session->flashdata('message'); ?>
      
		<a href="<?php echo base_url(); ?>admin/form_wali"> <button type="button" class="btn btn-success btn-lg"  > + TAMBAH WALI KELAS</button> </a>
		 <br><br>


	<form>
		 <table id="datatable" class="table table-striped table-bordered">
		<thead>
			<tr align="center">
				<td>NO</td>
				<td>NAMA WALI</td>
				<td>JK</td>
				<td>NIP</td>
				<td>Alamat</td>
				<td>NO HP</td>
				<td>AKSI</td>
			</tr>
		</thead>
		<tbody>

			<?php 
				$no = 1;
				foreach ($wali_kelas as $wl){
			 ?>
			 <tr>
			 	<td><?php echo $no++ ?></td>
			 	<td><?php echo $wl->nama_guru ?></td>
			 	<td><?php echo $wl->jk ?></td>
			 	<td><?php echo $wl->nip ?></td>
			 	<td><?php echo $wl->alamat; ?></td>
			 	<td><?php echo $wl->no_hp ?></td>
		
			 	<td>
			 	
				      <a href="#" data-id="<?php echo $wl->id_wali ?>" class="sa-remove-wt btn btn-sm btn-danger">Hapus</a>
				      
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



