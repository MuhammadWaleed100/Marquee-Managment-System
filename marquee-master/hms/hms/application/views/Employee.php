<div class="content-wrapper">
	<div class="page_container">
		<div class="box">

			<h3> Employees <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Employee</a>
			</h3>
			<div style="padding-top:50px; padding-right:10px; padding-left:10px;">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover example">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Address</th>
								<th>Email Address</th>
								<th>Contact#</th>
								<th>CNIC#</th>
								<th>Designation</th>
								<th>Employee Type</th>
								<th>Salary</th>
								<th>Username</th>
								<th>Password</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							$i=1;
							foreach($query as $emp){						
							?>
							<tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								<td><?php echo $emp['P_Name']; ?></td>
								<td><?php echo $emp['P_Address']; ?></td>
								<td><?php echo $emp['P_Email']; ?></td>
								<td><?php echo $emp['P_ContactNo']; ?></td>
								<td><?php echo $emp['P_CNIC']; ?></td>
								<td><?php echo $emp['Designation']; ?></td>
								<td><?php echo $emp['Type']; ?></td>
								<td><?php echo $emp['E_Salary']; ?></td>
								<td><?php echo $emp['UserName']; ?></td>
								<td><?php echo $emp['password']; ?></td>
								
								<td><a href="<?php echo base_url().'index.php/person/delete_emp/'.$emp['E_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									<a href="<?php echo base_url().'index.php/person/edit_emp/'.$emp['E_id'].'/'.$emp['person_id'].'/'.$emp['Emp_Login']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>


							</tr>
<?php  $i++;}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add New Employee</h4>
			</div> 
			<div class="modal-body">
				<form action="<?php echo base_url().'index.php/person/register_emp'?>" method="post" id="add_emp">
					<div class="form-group">
						<label>Enter Employee Name</label>
						<input type="text" name="P_Name" id="P_Name" class="form-control" placeholder="Enter Employee Name">
						<br></div>
					<div class="form-group">
						<label>Enter Employee Address</label>
						<input type="text" name="P_Address" id="P_Address" class="form-control" placeholder="Enter Employee Address">
						<br></div>
					<div class="form-group">
						<label>Enter Employee Email Address</label>
						<input type="email" name="P_Email" id="P_Email" class="form-control" placeholder="Enter Email Address">
						<br></div>
					<div class="form-group">
						<label>Enter Employee Contact No.</label>
						<input type="number_format" name="P_ContactNo" id="P_ContactNo" class="form-control" placeholder="Enter Employee Contact No.">
						<br></div>
					<div class="form-group">
						<label>Enter Employee CNIC#</label>
						<input type="number_format" name="P_CNIC" id="P_CNIC" class="form-control" placeholder="Enter Employee CNIC#">
						<br></div>
					<div class="form-group">
						<label>Enter Employee Designation</label>
						<input type="text" name="Designation" id="Designation" class="form-control" placeholder="Enter Employee Designation">
						<br></div>
					<div class="form-group">
						<label>Enter Employee Type</label>
						<input type="text" name="Type" id="Type" class="form-control" placeholder="Enter Employee Type">
						<br></div>
					<div class="form-group">
						<label>Enter Employee Salary</label>
						<input type="number_format" name="E_Salary" id="E_Salary" class="form-control" placeholder="Enter Employee Salary">
						<br></div>
					<div class="form-group">
						<label>Enter Employee Username</label>
						<input type="text" name="UserName" id="UserName" class="form-control" placeholder="Enter Employee Username">
						<br></div>
					<div class="form-group">
						<label>Enter Employee Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter Employee password">
						<br></div>
					
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Add</button>
						</div>
					
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
