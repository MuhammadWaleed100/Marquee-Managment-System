<div class="content-wrapper">
	<div class="page_container">
		<div class="box">
			<h3>Edit Employee Info</h3>
			<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row">
					<div class="col-sm-3"></div>
					
					<form action="<?php echo base_url().'index.php/person/edit_emp/'.$query[0]['E_id'].'/'.$query[0]['person_id'].'/'.$query[0]['Emp_Login'];?>" id="update_sub_emp">
						<div class="col-sm-6">
							<div class="from-group">
								<label>Employee Name</label>
								<input type="text" name="P_Name" id="P_Name" value="<?php echo $query[0]['P_Name']; ?>" placeholder="Enter Employee Name" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Employee Address</label>
								<input type="text" name="P_Address" id="P_Address" value="<?php echo $query[0]['P_Address']; ?>" placeholder="Enter Employee Address" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Email Address</label>
								<input type="email" name="P_Email" id="P_Email" value="<?php echo $query[0]['P_Email']; ?>" placeholder="Enter Email Address" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Contact#</label>
								<input type="number_format" name="P_ContactNo" id="P_ContactNo" value="<?php echo $query[0]['P_ContactNo']; ?>" placeholder="Enter Contact#" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>CNIC#</label>
								<input type="number_format" name="P_CNIC" id="P_CNIC" value="<?php echo $query[0]['P_CNIC']; ?>" placeholder="Enter CNIC#" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Designation</label>
								<input type="text" name="Designation" id="Designation" value="<?php echo $query[0]['Designation']; ?>" placeholder="Enter Employee Designation" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Employee Type</label>
								<input type="text" name="Type" id="Type" value="<?php echo $query[0]['Type'];?>" placeholder="Enter Employee Type" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Employee Salary</label>
								<input type="number_format" name="E_Salary" id="E_Salary" value="<?php echo $query[0]['E_Salary']; ?>" placeholder="Enter Employee Salary" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Username</label>
								<input type="text" name="UserName" id="UserName" value="<?php echo $query[0]['UserName']; ?>" placeholder="Enter UserName" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Password</label>
								<input type="password" name="password" id="password" value="<?php echo $query[0]['password']; ?>" placeholder="Enter password" class="form-control" />
							</div><br>
							
							<div class="from-group">
								<input class="btn btn-primary" type="submit" value="Update" />
							</div><br>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
