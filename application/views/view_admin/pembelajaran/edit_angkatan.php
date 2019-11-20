<div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="container">
                  <center><h2 style="color: green "> EDIT ANGKATAN</h2></center> <hr>
                  <br> 
            
               <form action="<?php echo base_url(); ?>home/update_angkatan" method ="post"  class="form-horizontal form-label-left"  >

        
         
   					<div class="item form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id">ID <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="id" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id" placeholder="" required="required" type="text" readonly value="<?php echo $pembelajaran->id ?>" >

                        </div>
            </div>

                    <input type="hidden" name="kode" value="<?php echo $pembelajaran->id ?>">
         
   					   <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="angkatan">Angkatan <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="tahun_angkatan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tahun_angkatan" placeholder="" required="required" readonly type="text" value="<?php echo $pembelajaran->tahun_angkatan ?>">
                        </div>
                    </div>


   					<div class="item form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                        </label>
                         <div class="col-md-3 col-sm-6 col-xs-12">
                           <select class="custom-select custom-select-lg" name="status">
                        
                            <option value="Aktif">Aktif</option>
                            <option value="Usang">Usang</option>
                           
                          </select>
                        </div>
                  </div>
                  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-3 col-md-offset-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary">Cancel</button>

                        </div>
                      </div>

 
</form>
          <?php //echo form_close(); ?>
     

  </div>
</div>
</div>
</div>
</div>