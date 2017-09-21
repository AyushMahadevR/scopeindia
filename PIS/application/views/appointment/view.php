<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Appointment Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<h3># : <?php echo $slug;?></h3><br>
			<h4>Patient Name : <?php echo $details->pname;?></h4><br>
			<h4>Doctor Name : <?php echo $details->name;?></h4><br>
			<h4>Time  : <?php echo $details->time;?></h4><br>
			
			 <div class="ln_solid"></div>
					<form id="demo-form4" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/appointment/delete/<?php echo $details->aid;?>">
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/appointment/index">Cancel</a>
						  <a class="btn btn-warning" href="<?php echo base_url();?>index.php/appointment/edit/<?php echo $details->aid;?>">Edit</a>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
					</form>
           </div>
		</div>
	</div>
</div>