<div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="container">
                  <center><h2 style="color: green "> FORM ANGKATAN BARU</h2></center> <hr>
                  <br> 
                <?php if (validation_errors() ) 
        { ?>
          <div  class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
            

          </div>
        <?php } ?>
                  
          <form action="<?php echo base_url(); ?>home/tambah_aksi_angkt" method ="post"  class="form-horizontal form-label-left"  >
      
         
   					   <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="tahun_angkatan">Angkatan <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">

                          <input id="tahun_angkatan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="tahun_angkatan" placeholder=""  type="text">
                          <input type="hidden" name="id">
                        </div>
                    </div>


   					<div class="item form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                        </label>
                        <div class="btn-group col-md-6 col-sm-6 col-xs-12">
	           
                  	    <select class="btn btn-default dropdown-toggle" name="status" >
                        <option>Aktif</option>
                        <option>Usang</option>
           
                    </select>
                      </div>
                  </div>
                  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-3 col-md-offset-4">
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