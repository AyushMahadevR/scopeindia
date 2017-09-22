
<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h2>Edit Appointments</h2>
			 <div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br>
      <?php if (validation_errors()): ?>
        <div class="well alert alert-danger" style="color:white;">
          <p><?php echo validation_errors(); ?></p>
        </div>
      <?php endif; ?>
			<form id="demo-form5" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/appointment/edit/<?php echo $slug;?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Patient Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select class="form-control" name="patient_id" >
														<?php foreach($patients as $patient) : ?>
												        <option <?php if($patient['pid'] == $details['patient_id']){echo 'selected="selected"';}?>value="<?php echo $patient['pid'];?>"><?php echo $patient['pname'];?></option>
												    <?php endforeach; ?>
                          </select> 
                        </div>
                      </div>
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Doctor Name <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="doctor_id">
														<?php foreach($doctors as $doctor) : ?>
												        <option <?php if($doctor['id'] == $details['id']){echo 'selected="selected"';}?> value="<?php echo $doctor['id'];?>"><?php echo $doctor['name'];?></option>
												    <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
											<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Appointment Time <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class='input-group date' id='myDatepicker'>
                            <input type='text' name='time' class="form-control" value="<?php echo $details['time'];?>" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/appointment/index">Cancel</a>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
		</div>
	</div>
</div>
