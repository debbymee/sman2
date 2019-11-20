<div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
			<div class="container">

		 	<h2 style="color: green " align="center"> DAFTAR PRESENSI SISWA KELAS 12</h2>
		    <hr>
		     <br><br>
		           <?php if (validation_errors() ) 
				    { ?>
				      <div  class="alert alert-danger" role="alert">
				        <?php echo validation_errors(); ?>
				        

				      </div>
				    <?php } ?>
                 
		    
			<div class="cari" style="float: right;">

			<input type="text"name="cari" placeholder="cari"> <input type="submit"class="btn btn-success" name="submit" value="cari" ><br><br><br>
			</div>
		      

 
		
		 <form action="<?php echo base_url(); ?>guru/tambah_presensi12" method ="post"  class="form-horizontal form-label-left"  >

		 	<h2 style="color: green " id="tgl"><b>Input Absensi Tanggal : <input type="date" value="<?php echo date('Y-m-d'); ?>" readonly> </b></h2> 
		    <br><br>


         <?= $this->session->flashdata('message'); ?>

		<table class="table" >
			<tr> 
				<td>NO</td>
				<td>NAMA SISWA</td>
				<td>KELAS</td>
         		<td>JAM DATANG</td>
         		<td>JAM PULANG</td>
         		<td>KETERANGAN</td>
         		<td>JADWAL PELAJARAN</td>	
         		
			</tr>
            <?php 
            $no=1;
            foreach($siswa as $data) { ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data->nama_siswa ?></td>
					<td><?php echo $data->nama_kelas ?></td>
					<td>
						
                      
                        <div class="col-md-8 col-sm-6 col-xs-12">
                        <select name="jam_datang[]" class="form-control">
                          
                        <?php for($i = 0;$i < 24; $i++) {?>
                            <option value="<?php echo $i.':'.'00' ?>"><?php echo $i.':'.'00' ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    
					</td>
			

					<td>
					   
                        <div class="col-md-8 col-sm-6 col-xs-12">
                        <select name="jam_pulang[]" class="form-control">
                          
                        <?php for($i = 0;$i < 24; $i++) {?>
                            <option value="<?php echo $i.':'.'00' ?>"><?php echo $i.':'.'00' ?></option>
                          <?php } ?>
                        </select>
                      </div>
                  	

					</td>
					<td>
						<div class="col-md-8 col-sm-6 col-xs-12">

                        <select class="btn btn-default dropdown-toggle" name="kd_keterangan[]" >
                       
                        <?php foreach ($keterangan as $kj): ?>
                          <option value="<?php echo $kj->kd_keterangan ?>"><?php echo $kj->nama_keterangan; ?></option>
                        <?php endforeach ?>
           
                  		</select>
                          
                  
                      </div>
            
					</td>

					<td>
						
                    
                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">
             
                        <select class="btn btn-default dropdown-toggle" name="id_jadwal[]" >
                       
                        <?php foreach ($jadwalll as $dj): ?>
                          <option value="<?php echo $dj->id_jadwal ?>"><?php echo $dj->nama_pelajaran ?></option>
                        <?php endforeach ?>
           
                  		</select>
                 	
					</td>
					<input type="hidden" name="id_siswa[]" value="<?php echo $data->id_siswa?>">
					<input type="hidden" name="tgl[]" value="<?php echo date('Y-m-d'); ?>" readonly>
					<input type="hidden" name="tglcek" value="<?php echo date('Y-m-d'); ?>" readonly>
					<input type="hidden" name="rombelcek" value="<?php echo $data->id_rombel?>">
					
					
					
				</tr>

						
		<?php } ?>

		

			</table>
			   <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-primary">Cancel</button>
                          
                        </div>
                      </div>
</form>

</div>
</div>
</div>
</div>
</div>