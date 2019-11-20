<div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
			<div class="container">

		<h2 style="color: green " align="center"> DAFTAR ANGKATAN SMAN 2 MOJOKERTO</h2>
		<hr>

		<?= $this->session->flashdata('message'); ?>
      
		<a href="<?php echo base_url(); ?>home/form_angkatan"> <button type="button" class="btn btn-success btn-lg"  > + TAMBAH ANGKATAN</button> </a>
		 <br><br>


	
	<form>
		<table class="table table-striped table-bordered table-hover table-condensed" >
			<tr align="center">
				<td>No</td>
				<td>Angkatan</td>
				<td>Status</td>
				<td>Aksi</td>
			</tr>

			<?php 
				$no = 1;
				foreach ($pembelajaran as $pem){
			 ?>
			 <tr>
			 	<td><?php echo $no++ ?></td>
			 	<td><?php echo $pem->tahun_angkatan ?></td>
			 	<td><?php echo $pem->status ?></td>
			 	<td>
			 	<?php echo anchor('home/edit_angkatan/'.$pem->id,'<i class="fas fa-edit"></i>'); ?>
				<?php echo anchor('home/hapus_angkatan/'.'?id='.$pem->id ,'<i class="fas fa-trash-alt"></i>'); ?> 
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