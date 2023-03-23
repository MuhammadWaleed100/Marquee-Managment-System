<div class="content-wrapper">
	<div class="page_container">
		<div class="box">
			<h3>Edit Package</h3>
			<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row">
					<div class="col-sm-3"></div>
					<form action="<?php echo base_url().'index.php/marquee/edit_package/'.$pack_info[0]['Package_id']; ?>" id="update_sub_package">
						<div class="col-sm-6">
							<div class="from-group">
								<label>Package Name</label>
								<input type="text" name="Package_Name" id="Package_Name" value="<?php echo $pack_info[0]['Package_Name']; ?>" placeholder="Enter Package Name" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Package Category</label>
								<input type="text" name="Package_Category" id="Package_Category" value="<?php echo $pack_info[0]['Package_Category']; ?>" placeholder="Enter Package Category" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>No. of Items</label>
								<input type="text" name="No_of_items" id="No_of_items" value="<?php echo $pack_info[0]['No_of_items']; ?>" placeholder="Enter No. of Items" class="form-control" />
							</div><br>
							<div class="from-group">
								<label>Charges</label>
								<input type="text" name="charges" id="charges" value="<?php echo $pack_info[0]['charges']; ?>" placeholder="Enter Charges" class="form-control" />
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
