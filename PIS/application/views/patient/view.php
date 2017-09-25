<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Patient Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<h3>Name : <?php echo $details->pname;?></h3><br>
			<h4>Address : <?php echo $details->paddress;?></h4><br>
			<h4>Age : <?php echo $details->page;?></h4><br>
			<h4>Gender  : <?php echo $details->pgender;?></h4><br>
			<h4>Medical History : <?php echo $details->history;?></h4><br>
			<h4>Doctor ID : <?php echo '<li class="btn btn-default"><a href="'.base_url().'index.php/doctors/view/'.$doctor->id.'">'. $doctor->name.'</a></li>';?></h4><br>
			<h4>Medicine ID : <?php
						foreach($medicines as $arr){
							foreach($med_arr as $med){ 
							if($arr['id']== $med){
								echo '<li class="btn btn-default"><a href="'.base_url().'index.php/medicine/view/'.$med.'">'. $arr['name'].'</a></li>';
							}
						}
						}
						
				?></h4><br>
			<h4>Test ID : <?php echo '<li class="btn btn-default"><a href="'.base_url().'index.php/test/view/'.$test->id.'">'. $test->name.'</a></li>';?></h4><br>
			 <div class="ln_solid"></div>
					<form id="demo-form4" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/patient/delete/<?php echo $details->pid;?>">
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/patient/index">Cancel</a>
						  <a class="btn btn-warning" href="<?php echo base_url();?>index.php/patient/edit/<?php echo $details->pid;?>">Edit</a>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
					</form>
           </div>
		</div>
	</div>
</div>