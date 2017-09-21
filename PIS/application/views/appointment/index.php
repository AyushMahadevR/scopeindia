
<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h2>Appointments</h2>
			<ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="<?php echo base_url();?>index.php/appointment/add" class="dropdown-toggle"  role="button" aria-expanded="false"><i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
			<div class="clearfix"></div>
		</div>
		 <div class="x_content">
			 <?php if ($this->session->flashdata('apadd_fail')): ?>
				 <?php echo'<p class="alert alert-warning">'.$this->session->flashdata('apadd_fail').'</p>'; ?>
			 <?php endif; ?>
			 <?php if ($this->session->flashdata('apadd_success')): ?>
				 <?php echo'<p class="alert alert-success">'.$this->session->flashdata('apadd_success').'</p>'; ?>
			 <?php endif; ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Patient Name</th>
						  <th>Doctor Name</th>
                          <th>Time Of Appointment</th>
                        </tr>
                      </thead>
					  <tbody>
						<?php foreach($appointments as $appointment) :?>
							<tr>
								<td><?php echo $appointment->aid; ?></td>
								<td><a href="<?php echo base_url();?>index.php/appointment/view/<?php echo $appointment->aid; ?>"><?php echo $appointment->pname; ?></a></td>
								<td><a href="<?php echo base_url();?>index.php/doctors/view/<?php echo $appointment->id; ?>"><?php echo $appointment->name; ?></a></td>
								<td><?php echo $appointment->time; ?></td>
							</tr>
						<?php endforeach;?>
					  </tbody>
					 </table>
					 <div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
