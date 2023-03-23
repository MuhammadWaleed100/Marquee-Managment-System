<div class="content-wrapper">
	<div class="page_container">
		<div class="box">

			<h3> Events (<?php echo sizeof($all_event); ?>)<a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Event</a>
			</h3>
			<div style="padding-top:50px; padding-right:10px; padding-left:10px;">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover example">
						<thead>
							<tr>
								<th>#</th>
								<th>Event Category</th>
								<th>Sitting Layout</th>
								<th>Booking Date</th>
								<th>Booking Status</th>
								<th>Start Time</th>
								<th>Closing Time</th>
								<th>Expected Guests</th>
								<th>Package Name</th>
								<th>Advance Payment</th>
								<th>Advance Payment Date</th>
								<th>Decoration Charges</th>
								<th>Music Charges</th>
								<th>Package Price</th>
								<th>Other Charges</th>
								<th>Service Charges</th>
								<th>Final Payment</th>
								<th>Final Payment Date</th>
								<th>Customer Name</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							$i=1;
							foreach($all_events as $event){
							
							
							?>
							<tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								
								<td><?php echo $event['name']; ?></td>
								<td><input type="checkbox" <?php if($event['status']==1){ echo 'checked';} ?> name="status"></td>
								<td><a href="<?php echo base_url().'index.php/marquee/delete_category/'.$event['id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									<a href="<?php echo base_url().'index.php/marquee/edit_category/'.$event['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>


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
				<h4 class="modal-title">Add New Event</h4>
			</div>
			<div class="modal-body">
				<?php form_open('marquee/repopulateDropdown') ?>
				<form action="<?php echo base_url().'index.php/marquee/event'?>" method="post" id="add_event">
					<div class="form-group">
						<label>Select Event Category</label>
						<select name="cat_name">
							<option value="">Select</option>	
							<option value="">Select</option>	
								
						</select>
						<input type="text" name="name" id="category" class="form-control" placeholder="Enter Event Category Name">
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
