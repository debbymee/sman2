<div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> BIO DATA WALI KELAS SMAN 2 MOJOKERTO</h2>
		<hr>

		<?= $this->session->flashdata('message'); ?>

	<form>
		<table class="table table-striped table-bordered table-hover table-condensed" >
			<tr align="center" style="color: black" >
				<td >NO</td>
				<td>NAMA GURU</td>
				<td>JK</td>
				<td>NIP</td>
				<td>ALAMAT</td>
				<td>NO HP</td>
				<td>AKUN USER</td>
				<td>AKSI</td>

			</tr>

			<?php 
				$no = 1;
				foreach ($wali as $gr){
			 ?>
				 <tr  style="color: black">
			 	<td><?php echo $no++ ?></td>
			 	<td><?php echo $gr->nama_guru ?></td>
			 	<td><?php echo $gr->jk ?></td>
			 	<td><?php echo $gr->nip ?></td>
			 	<td><?php echo $gr->alamat ?></td>
			 	<td><?php echo $gr->no_hp; ?></td>
			 	<td><?php echo $gr->username; ?></td>
			 	<td>
			 	<?php echo anchor('Wali_kelas/edit_wali/'.$gr->id_guru,'<i class="fas fa-edit"></i>'); ?>
			
				</td>
			 </tr>

			<?php } ?>
		</table>


</form>

</div>
</div>
</div>
</div>
</div>