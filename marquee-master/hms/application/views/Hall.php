<div class="content-wrapper">
	<div class="page_container">
		<div class="box">

			<h3> Event Category (<?php echo sizeof($all_category); ?>)<a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New Hall</a>
			</h3>
			<div style="padding-top:50px; padding-right:10px; padding-left:10px;">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover example">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Charges</th>
								<th>Capacity</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							$i=1;
							foreach($all_category as $cat){
							
							
							?>
							<tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								<td><?php echo $cat['Hall_Name']; ?></td>
								<td><?php echo $cat['Hall_Charges']; ?></td>
								<td><?php echo $cat['Capacity']; ?></td>
								
								<td><a href="<?php echo base_url().'index.php/marquee/delete_hall/'.$cat['Hall_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									<a href="<?php echo base_url().'index.php/marquee/edit_hall/'.$cat['Hall_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>


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
				<h4 class="modal-title">Add New Hall</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url().'index.php/marquee/hall'?>" method="post" id="add_hall">
					<div class="form-group">
						<label>Enter Hall Name</label>
						<input type="text" name="Hall_Name" id="Hall_Name" class="form-control" placeholder="Enter Event Category Name">
						<br>
						<label>Enter Hall Charges</label>
						<input type="text" name="Hall_Charges" id="Hall_Charges" class="form-control" placeholder="Enter Event Category Name">
						<br>
						<label>Enter Hall Capacity</label>
						<input type="text" name="Capacity" id="Capacity" class="form-control" placeholder="Enter Event Category Name">
						<br>
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Add</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
