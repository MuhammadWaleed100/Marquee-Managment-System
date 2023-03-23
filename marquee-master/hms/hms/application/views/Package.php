<div class="content-wrapper">
	<div class="page_container">
		<div class="box">

			<h3> Packages (<?php echo sizeof($all_package); ?>)<a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Event Category</a>
			</h3>
			<div style="padding-top:50px; padding-right:10px; padding-left:10px;">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover example">
						<thead>
							<tr>
								<th>#</th>
								<th>Package Name</th>
								<th>Package Category</th>
								<th>No. of items</th>
								<th>Charges</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							$i=1;
							foreach($all_package as $package){
							
							
							?>
							<tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								<td><?php echo $package['Package_Name']; ?></td>
								<td><?php echo $package['Package_Category']; ?></td>
								<td><?php echo $package['No_of_items']; ?></td>
								<td><?php echo $package['charges']; ?></td>
                                
                                                    
								<td><a href="<?php echo base_url().'index.php/marquee/delete_package/'.$package['Package_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									<a href="<?php echo base_url().'index.php/marquee/edit_package/'.$package['Package_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>


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
				<h4 class="modal-title">Add New Category</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url().'index.php/marquee/package'?>" method="post" id="add_package">
					<div class="form-group">
						<label>Enter Package Name</label>
						<input type="text" name="Package_Name" id="Package_Name" class="form-control" placeholder="Enter Package Name">
						<br></div>
                    
                    <div class="form-group">
						<label>Enter Package Category</label>
						<input type="text" name="Package_Category" id="Package_Category"  class="form-control" placeholder="Enter Package Category">
						<br></div>
                    
                       <div class="form-group">
						<label>Enter Number of Items</label>
						<input type="number_format" name="No_of_items" id="No_of_items" class="form-control" placeholder="Enter Number of Items">
						<br></div>
                    
                       <div class="form-group">
						<label>Enter Package Charges</label>
						<input type="number_format" name="charges"  id="charges" class="form-control" placeholder="Enter Package Charges">
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
