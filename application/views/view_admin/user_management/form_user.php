                <div class="x_panel">
                <div class="container">

                  <center><h2 style="color: green "> FORM TAMBAH USER</h2></center> <hr>
                  <br> 
      <?php if (validation_errors() ) 
    { ?>
      <div  class="alert alert-danger" role="alert">
        <?php echo validation_errors(); ?>
        

      </div>
    <?php } ?>
                  
          <form action="<?php echo base_url(); ?>admin/tambah_user" method ="post"  class="form-horizontal form-label-left"  >

					<?= $this->session->flashdata('message'); ?>
      
    
   					<div class="item form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">

                          <input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="username" placeholder="masukkan username"  type="text"   " value=" <?php echo set_value('username'); ?>">
                          <input type="hidden" name="id">
                          <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?> <br>	

                        </div>

                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">

                          <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="password" placeholder="" type="password">
                        
                          <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> <br>	
                          
                        </div>

                    </div>



   					<div class="item form-group">
   						<label class="control-label col-md-4 col-sm-3 col-xs-12" for="role_id_fk">role_id <span class="required">*</span>
              </label>
                  <div class="btn-group col-md-3 col-sm-6 col-xs-12">
	                    <select name="role" class="form-control">
                        <?php foreach ($role as $r): ?>
                          <option value="<?php echo $r->id_role ?>"> <?php echo $r->role; ?>
                          </option>
                        <?php endforeach ?>
                      </select>

                    <?php echo form_error('role_id_fk', '<small class="text-danger pl-3">', '</small>'); ?> <br>  
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



