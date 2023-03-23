<div class="content-wrapper">
	<div class="page_container">
		<div class="box">
			<h3>Edit Supplier Info</h3>
			<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row">
					<div class="col-sm-3"></div>
					
					<form action="<?php echo base_url().'index.php/person/edit_sup/'.$query[0]['Sup_id'].'/'.$query[0]['person_id'];?>" id="update_sub_sup">
						<div class="col-sm-6">
							<div class="from-group">
								<label>Supplier Type</label>
								<input type="text" name="sup_Type" id="sup_Type" value="<?php echo $query[0]['sup_Type']; ?>" placeholder="Enter Supplier Type" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Supplier Name</label>
								<input type="text" name="P_Name" id="P_Name" value="<?php echo $query[0]['P_Name']; ?>" placeholder="Enter Supplier Name" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Supplier Address</label>
								<input type="text" name="P_Address" id="P_Address" value="<?php echo $query[0]['P_Address']; ?>" placeholder="Enter Supplier Address" class="form-control" />
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
								<input class="btn btn-primary" type="submit" value="Update" />
							</div><br>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
