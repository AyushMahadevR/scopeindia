<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Edit Patient Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<?php if(validation_errors()) :?>
				 <div class="well alert alert-danger" style="color:white;">
					<p><?php echo validation_errors(); ?></p>
              </div>
			<?php endif;?>
			<form id="demo-form6" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/patient/edit/<?php echo $details->pid;?>">
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Name"> Patient Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pname" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details->pname;?>">
                        </div>
             </div>
			 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qualification">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="paddress" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $details->paddress;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Age</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="page"value="<?php echo $details->page;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="pgender" value="Male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="pgender" value="Female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Medical History <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="history" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"value="<?php echo $details->history;?>">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Doctor ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="doctor_id" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"value="<?php echo $details->doctor_id;?>">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Medicine ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="medicine_id" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"value="<?php echo $details->medicine_id;?>">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Test ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="test_id" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"value="<?php echo $details->test_id;?>">
                        </div>
                      </div>
			 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/patient/index">Cancel</a>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
			</form>
		</div>
	</div>
</div>