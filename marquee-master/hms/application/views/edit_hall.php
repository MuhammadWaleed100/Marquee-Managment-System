<div class="content-wrapper">
	<div class="page_container">
		<div class="box">
			<h3>Edit Hall</h3>
			<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row">
					<div class="col-sm-3"></div>
					<form action="<?php echo base_url().'index.php/marquee/edit_hall/'.$cat_info[0]['Hall_id'] ?>" id="update_hall" method="post">
						<div class="col-sm-6">
							<div class="from-group">
								<label>Hall Name</label>
								<input type="text" name="Hall_Name" id="Hall_Name" value="<?php echo $cat_info[0]['Hall_Name']; ?>" placeholder="Enter Category Name" class="form-control" /><br>
								<label>Hall Charges</label>
								<input type="text" name="Hall_Charges" id="Hall_Charges" value="<?php echo $cat_info[0]['Hall_Charges']; ?>" placeholder="Enter Category Name" class="form-control" />
								<label>Hall Capacity</label>
								<input type="text" name="Capacity" id="Capacity" value="<?php echo $cat_info[0]['Capacity']; ?>" placeholder="Enter Category Name" class="form-control" />
							</div><br>
							<div class="from-group">
								<input class="btn btn-primary" type="submit" value="Update" />
							</div><br>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
