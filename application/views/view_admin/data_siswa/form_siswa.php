                <div class="x_panel">
                <div class="container">
                  <center><h2 style="color: green "> FORM INPUT DATA SISWA </h2></center> <hr>
                  <br> 
   
            <?php if (validation_errors() ) 
             { ?>
            <div  class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
            

            </div>
            <?php } ?>
                      
            <form action="<?php echo base_url(); ?>admin/tambah_siswa" method ="post"  class="form-horizontal form-label-left"  >

              <?= $this->session->flashdata('message'); ?>
          
                      
                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_siswa">NAMA SISWA <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="nama_siswa" class="form-control col-md-7 col-xs-12"name="nama_siswa" placeholder="masukkan nama siswa"  type="text" >
                          <input type="hidden" name="id_siswa">
                          <?php echo form_error('nama_siswa', '<small class="text-danger pl-3">', '</small>'); ?> <br> 

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nipd">NIPD <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nipd" name="nipd" placeholder="masukkan nipd siswa 5 kar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk">JENIS KELAMIN <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <select class="btn btn-default dropdown-toggle" name="jk">
                            <option value="laki-laki"> laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                        
                          <?php echo form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?> <br>  
                          
                        </div>

                    </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nisn">NISN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nisn" name="nisn" placeholder="masukkan nisn siswa 10 kar"  required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">TEMPAT LAHIR <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tempat_lahir" name="tempat_lahir"placeholder="masukkan tempat lahir siswa"  required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_lahir"> TANGGAL LAHIR <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="tgl_lahir" name="tgl_lahir" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nik" name="nik" placeholder="masukkan nik siswa 10 kar"  required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama">AGAMA <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <select class="btn btn-default dropdown-toggle" name="agama">
                            <option value="islam">islam </option>
                            <option value="kristen">kristen</option>
                            <option value="protestan">protestan</option>
                            <option value="hindu">hindu</option>
                            <option value="buddha">buddha</option>

                          </select>
                        
                          <?php echo form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?> <br>  
                          
                        </div>

                        </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">ALAMAT <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="alamat" name="alamat" placeholder="masukkan alamat siswa"  required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_kelas">KELAS <span class="required">*</span>
                      </label>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_kelas" class="form-control">
                        <?php foreach ($kelas as $r  ): ?>
                          <option value="<?php echo $r->id_kelas ?>"> <?php echo $r->nama_kelas; ?></option>
                        <?php endforeach ?>
                       </select>

                      <?php echo form_error('id_kelas', '<small class="text-danger pl-3">', '</small>'); ?> <br>  
                      </div>

                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">NO HP ORANG TUA <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="no_hp" name="no_hp" placeholder="masukkan no_hp siswa 10 kar"  required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                     </div>

          
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
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