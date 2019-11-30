
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> DATA GURU SMAN 2 MOJOKERTO</h2>
		<hr>

		<?= $this->session->flashdata('message'); ?>
      
		<a href="<?php echo base_url(); ?>admin/form_guru"> <button type="button" class="btn btn-success btn-lg"  > + TAMBAH GURU</button> </a>
		 <br><br>

	<form>
		<table id="datatable" class="table table-striped table-bordered">
			<thead>
			<tr align="center">
				<td>NO</td>
				<td>NAMA GURU</td>
				<td>JK</td>
				<td>NIP</td>
				<td>ALAMAT</td>
				<td>NO HP</td>
				<td>NAMA AKUN</td>
				<td>FOTO</td>
				<td>AKSI</td>
			</tr>
			</thead>
			<tbody>

			<?php 
				$no = 1;
				foreach ($guru as $gr){
			 ?>
			 <tr>
			 	<td><?php echo $no++ ?></td>
			 	<td><?php echo $gr->nama_guru ?></td>
			 	<td><?php echo $gr->jk ?></td>
			 	<td><?php echo $gr->nip ?></td>
			 	<td><?php echo $gr->alamat ?></td>
			 	<td><?php echo $gr->no_hp; ?></td>
			 	<td><?php echo $gr->username; ?></td>
			 	<td><?php echo $gr->foto; ?></td>
			 	<td>
			 	<a href="<?php echo site_url('admin/edit_guru/'.$gr->id_guru); ?>" class="btn btn-sm btn-info">Edit</a>
				 <a href="#" data-id="<?php echo $gr->id_guru ?>" class="sa-remove-guru btn btn-sm btn-danger">Hapus</a> 
				</td>
			 </tr>

			<?php } ?>
		</table>
		</tbody>


</form>

</div>

