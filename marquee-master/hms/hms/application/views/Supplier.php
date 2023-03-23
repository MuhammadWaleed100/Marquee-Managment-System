<div class="content-wrapper">
	<div class="page_container">
		<div class="box">

			<h3> Suppliers <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Supplier</a>
			</h3>
			<div style="padding-top:50px; padding-right:10px; padding-left:10px;">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover example">
						<thead>
							<tr>
								<th>#</th>
								<th>Supplier Type</th>
								<th>Name</th>
								<th>Address</th>
								<th>Email Address</th>
								<th>Contact#</th>
								<th>CNIC#</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$i=1;
							foreach($query as $sup){						
							?>
							<tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								<td><?php echo $sup['sup_Type']; ?></td>
								<td><?php echo $sup['P_Name']; ?></td>
								<td><?php echo $sup['P_Address']; ?></td>
								<td><?php echo $sup['P_Email']; ?></td>
								<td><?php echo $sup['P_ContactNo']; ?></td>
								<td><?php echo $sup['P_CNIC']; ?></td>
								
								<td><a href="<?php echo base_url().'index.php/person/delete_sup/'.$sup['Sup_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									<a href="<?php echo base_url().'index.php/person/edit_sup/'.$sup['Sup_id'].'/'.$sup['person_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>


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
				<h4 class="modal-title">Add New Supplier</h4>
			</div> 
			<div class="modal-body">
				<form action="<?php echo base_url().'index.php/person/register_sup'?>" method="post" id="add_sup">
					<div class="form-group">
						<label>Enter Supplier Type</label>
						<input type="text" name="sup_Type" id="sup_Type" class="form-control" placeholder="Enter Supplier Type">
						<br></div>
					<div class="form-group">
						<label>Enter Supplier Name</label>
						<input type="text" name="P_Name" id="P_Name" class="form-control" placeholder="Enter Supplier Name">
						<br></div>
					<div class="form-group">
						<label>Enter Supplier Address</label>
						<input type="text" name="P_Address" id="P_Address" class="form-control" placeholder="Enter Supplier Address">
						<br></div>
					<div class="form-group">
						<label>Enter Supplier Email Address</label>
						<input type="email" name="P_Email" id="P_Email" class="form-control" placeholder="Enter Supplier Address">
						<br></div>
					<div class="form-group">
						<label>Enter Supplier Contact No.</label>
						<input type="number_format" name="P_ContactNo" id="P_ContactNo" class="form-control" placeholder="Enter Supplier Contact No.">
						<br></div>
					<div class="form-group">
						<label>Enter Supplier CNIC#</label>
						<input type="number_format" name="P_CNIC" id="P_CNIC" class="form-control" placeholder="Enter Supplier CNIC#">
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
